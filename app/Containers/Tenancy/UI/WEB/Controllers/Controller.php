<?php

namespace App\Containers\Tenancy\UI\WEB\Controllers;

use App\Containers\Settings\Models\Setting;
use App\Containers\User\Models\User;
use App\Ship\Parents\Controllers\WebController;
use App\Ship\Transporters\DataTransporter;
use DB;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Illuminate\Support\Facades\Artisan;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @return  string
     */
    public function index()
    {
        return view('tenancy::index');
    }

    public function create()
    {
        return view('tenancy::create');
    }

    public function store()
    {
        $fqdn = request()->get('domain').'.'.config('app.domain');
        $hostname = Apiato::call('Tenancy@CreateTenantAction', [$fqdn]);

        tenant($hostname->website);

        Artisan::call('db:seed', [
            '--class' => \App\Containers\Seeder\Tenant\DefaultTanantSeeder::class,
        ]);

        $user = User::create([
            'email' => request()->get('email'),
            'password' => bcrypt(request()->get('password')),
            'name' => request()->get('company_name'). ' Admin'
        ]);

        $admin_role = Apiato::call('Authorization@CreateRoleTask', ['admin', '管理员', '管理员', 999]);

        $user->assignRole($admin_role);

        setting('account_name', request()->get('company_name'));

        return response()->json([
            'result' => true,
            'redirect' => $hostname->fqdn
        ]);
    }

    public function checkDomain($fqdn=null, HostnameRepository $hostnameRepository)
    {
        $fqdn = $fqdn ?: request()->get('domain').'.'.config('app.domain');

        if (in_array($fqdn, config('app.reserved_fqdn'))) {
            return response()->json([
                'result' => false,
                'message' => 'Can not use this name.'
            ]);
        }
        if ($hostname = $hostnameRepository->findByHostname($fqdn)) {
            return response()->json([
                'result' => false,
                'message' => 'Name has been token',
            ]);
        }

        return response()->json([
            'result' => true,
            'fqdn' => $fqdn
        ]);
    }

    public function setCookie()
    {
        \Illuminate\Support\Facades\Cookie::queue(request()->get('cookie_name'), request()->get('cookie_value'));
        return '';
    }
}
