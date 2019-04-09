<?php

namespace App\Containers\Tenancy\Providers;

use App\Ship\Parents\Providers\MainProvider;
use Hyn\Tenancy\Facades\TenancyFacade;
use Hyn\Tenancy\Providers\TenancyProvider;

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
        CacheServiceProvider::class,
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
