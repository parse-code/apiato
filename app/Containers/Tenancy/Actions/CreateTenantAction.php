<?php

namespace App\Containers\Tenancy\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;

/**
 * Class CreateTenantAction.
 */
class CreateTenantAction extends Action
{
    /**
     */
    public function run($fqdn)
    {
        $hostname = Apiato::call('Tenancy@CreateTenantTask', [$fqdn]);
        return $hostname;
    }
}
