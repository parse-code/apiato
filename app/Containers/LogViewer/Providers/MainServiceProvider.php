<?php

namespace App\Containers\LogViewer\Providers;

use App\Ship\Parents\Providers\MainProvider;
use Arcanedev\LogViewer\LogViewerServiceProvider;

/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 */
class MainServiceProvider extends MainProvider
{

    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [
        LogViewerServiceProvider::class,
    ];

}
