<?php

namespace App\Containers\Tenancy\Providers;

use App\Ship\Parents\Providers\MainProvider;
use DB;
use Cache;
use Illuminate\Cache\RedisStore;

/**
 * Created by parse.cn
 * Author: Alex (dinghua@me.com)
 * Date: 2018-12-05
 * Time: 10:53
 * All rights reserved.
 */
class CacheServiceProvider extends MainProvider
{
    public function boot()
    {
        Cache::extend('redis_tenancy', function ($app) {
            if (PHP_SAPI === 'cli') {
                $uuid = $app['config']['driver'];
            } else {
                // ok, this is basically a hack to set the redis cache store
                // prefix to the UUID of the current website being called
                $fqdn = request()->getHost();

                $uuid = DB::connection('system')->table('hostnames')
                    ->select('websites.app_key')
                    ->join('websites', 'hostnames.website_id', '=', 'websites.id')
                    ->where('fqdn', $fqdn)
                    ->value('app_key');
            }

            return Cache::repository(new RedisStore(
                $app['redis'],
                $uuid,
                $app['config']['cache.stores.redis.connection']
            ));
        });
    }
}
