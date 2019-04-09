<?php

namespace App\Containers\Tenancy\UI\CLI\Commands;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Entity\Models\Entity;
use App\Containers\Membership\Models\Member;
use App\Containers\Membership\Models\Membership;
use App\Containers\Sales\Models\Transaction;
use App\Containers\Sales\Models\TransactionBreakdown;
use App\Containers\Shopper\Models\Shopper;
use App\Containers\Store\Models\Mall;
use App\Containers\Store\Models\Store;
use App\Containers\Tenancy\Models\Tenant;
use App\Containers\User\Models\User;
use App\Containers\Voucher\Models\Ticket;
use App\Containers\Voucher\Models\Voucher;
use App\Containers\Wallet\Models\ShopperWallet;
use App\Containers\Wallet\Models\Wallet;
use App\Ship\Parents\Commands\ConsoleCommand;
use App\Ship\Transporters\DataTransporter;
use Carbon\Carbon;
use DB;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;

/**
 * Class InitCommand
 *
 * @author  Alex <alex@parse.cn>
 */
class InitCommand extends ConsoleCommand
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shoptima:init 
    {--data : Create sample data}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init tenancy database.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('config:clear');
        $this->call('cache:clear');
        $this->call('view:clear');

        $websites = Website::all();
        foreach ($websites as $website) {
            $this->output->text('Deleing website: '.$website->id);
            app(WebsiteRepository::class)->delete($website, true);
        }

        $this->call('migrate:fresh', [
            '--database' => 'system',
            '--path' => 'app/Containers/*/Data/Migrations/System',
        ]);

        $website = new Website();
        $website->uuid = 'f746345b361747ac876fd9e45345f64f';

        app(WebsiteRepository::class)->create($website);
        $hostname = new Hostname();
        $hostname->fqdn = 'demo.'.config('app.domain');
        $hostname = app(HostnameRepository::class)->create($hostname);
        app(HostnameRepository::class)->attach($hostname, $website);

        tenant($website);

        $this->call('db:seed', [
            '--class' => \App\Containers\Seeder\Tenant\DefaultTanantSeeder::class,
        ]);

        $name       = 'Demo Admin';
        $email      = 'demo@demo.com';
        $password   = 'demo';

        $dataTransporter = new DataTransporter([
            'isClient'  => false,
            'name'      => $name,
            'email'     => $email,
            'password'  => $password,
        ]);

        $admin_role = Apiato::call('Authorization@CreateRoleTask', ['admin', '管理员', '管理员', 999]);
        $user = User::create([
            'email' => 'demo@demo.com',
            'password' => bcrypt('demo'),
            'name' => 'Super Admin',
            'language' => 'zh'
        ]);
        $user->assignRole(Apiato::call('Authorization@FindRoleTask', ['admin']));

        DB::table('oauth_clients')->insert([
            'name' => 'mobile_app',
            'secret' => 'iVRUNCOw6Bkx0diGlPc8XnsEdeullHUQ3ycgGbmO',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0,
            'redirect' => 'localhost',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if (!$this->option('data')) {
            return;
        }

        $shopper = Shopper::create([
            'name' => app(\Faker\Generator::class)->name,
            'email' => 'shopper@demo.com',
            'password' => bcrypt('demo'),
            'source' => '前台录入'
        ]);

//        $role = Apiato::call('Authorization@CreateRoleTask', ['shopper', 'Shopper', 'Shopper Role']);
//        $shopper->assignRole($role);

        $this->output->table(['Shopper name', 'Email', 'Password'], [[$shopper->name, $shopper->email, 'demo']]);

        $wallet = Wallet::create([
            'name' => 'Points wallet',
            'prefix' => 'W'
        ]);

        $this->output->table(['Wallet name', 'Prefix'], [[$wallet->name, $wallet->prefix]]);

        $voucher = Voucher::create([
            'title'                 => '满100减20',
            'value'                 => 20,
            'type'                  => 'voucher',
            'restrict_spend'        => true,
            'restrict_spend_amount' => 100
        ]);

        $ticket = Ticket::create([
            'voucher_id' => $voucher->id,
            'shopper_id' => $shopper->id,
            'status'      => 'active',
            'expiry_at'      => date('Y-m-d 23:59:59', strtotime('+30 day')),
            'number' => rand(100000000, 999999999),
        ]);

        $membercard = Membership::create([
            'name' => '屈臣氏会员卡',
            'cover_type' => 1,
            'cover_data' => '/static/assets/images/card_placeholder.jpg',
            'wallet_id' => $wallet->id
        ]);

        $mall = Mall::create([
            'name' => '大洋新街口店',
            'logo' => 'cee40f2e722faaab623142eb43ab3c04.png'
        ]);

        $this->output->table(['card name', 'Wallet'], [[$membercard->name, $wallet->id]]);

        $shopper_wallet = ShopperWallet::create([
            'wallet_id' => $membercard->wallet_id,
            'shopper_id' => $shopper->id,
            'status' => 'active',
            'balance' => rand(100, 10000)
        ]);

        Member::create([
            'shopper_id' => $shopper->id,
            'membership_id' => $membercard->id,
            'shopper_wallet_id' => $shopper_wallet->id,
            'number' => strtoupper(uniqid()),
            'status' => 'normal'
        ]);

        setting('account_name', '大洋集团');
        setting('company_logo', '/static/assets/images/default_logo.jpg');

        Entity::create([
            'name' => 'skin_type',
            'label' => '肤质',
            'model' => 'App\Containers\Shopper\Models\Shopper',
            'type' => 'text',
        ]);

        $store = Store::create([
            'name' => '优衣库'
        ]);

        $store_admin_role = Apiato::call('Authorization@CreateRoleTask', ['store_admin', '店铺管理员', '店铺管理员', 100]);
        $mall_admin_role = Apiato::call('Authorization@CreateRoleTask', ['mall_admin', '商场管理员', '商场管理员', 200]);

        $store_admin = User::create([
            'email' => 'store@demo.com',
            'password' => bcrypt('demo'),
            'name' => 'Store Admin',
            'language' => 'zh'
        ]);

        $mall_admin = User::create([
            'email' => 'mall@demo.com',
            'password' => bcrypt('demo'),
            'name' => 'Mall Admin',
            'language' => 'zh'
        ]);

        $store_admin->roles()->attach($store_admin_role);
        $mall_admin->roles()->attach($mall_admin_role);

        $store_admin->stores()->attach(1);
        $mall_admin->roles()->attach(1);

        $this->output->table(['Url', 'Username', 'Password'], [[$hostname->fqdn, $email, $password]]);
    }
}
