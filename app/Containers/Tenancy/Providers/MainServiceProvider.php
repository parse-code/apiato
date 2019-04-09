<?php

namespace App\Containers\Tenancy\Providers;

use App\Ship\Parents\Providers\MainProvider;
use Hyn\Tenancy\Facades\TenancyFacade;
use Hyn\Tenancy\Providers\TenancyProvider;
use Hyn\Tenancy\Providers\WebserverProvider;

/**
 * Class MainServiceProvider.
 *
 */
class MainServiceProvider extends MainProvider
{

    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [
        TenancyProvider::class,
        WebserverProvider::class,
    ];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [
        "Tenancy" => TenancyFacade::class,
    ];
}
