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
use App\Containers\Tenancy\UI\WEB\Requests\TenantRequest;

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
    public function index(WebsiteRepository $repository)
    {
        $websites = Website::paginate(5);
        return view('tenancy::index')
            ->with('websites', $websites);
    }

    public function create()
    {
        return view('tenancy::create');
    }

    public function store(TenantRequest $request)
    {
        $fqdn = request()->get('domain').'.'.config('tenancy.hostname.default');
        $check_domain_result = $this->checkDomain($fqdn);

        if ( false == $check_domain_result['result']) {
            return redirect()->back()->withInput(request()->all())->withErrors([$check_domain_result['message']]);
        }
        $hostname = Apiato::call('Tenancy@CreateTenantAction', [$fqdn]);
        return redirect('tenancy');
    }

    public function checkDomain($fqdn)
    {
        if (in_array($fqdn, config('tenancy.hostname.reserved_fqdn'))) {
            return [
                'result' => false,
                'message' => 'Can not use this name.'
            ];
        }
        if ($hostname = app(HostnameRepository::class)->findByHostname($fqdn)) {
            return [
                'result' => false,
                'message' => 'Name has been token',
            ];
        }

        return  [
            'result' => true,
            'message'
        ];
    }

    public function setCookie()
    {
        \Illuminate\Support\Facades\Cookie::queue(request()->get('cookie_name'), request()->get('cookie_value'));
        return '';
    }
}
