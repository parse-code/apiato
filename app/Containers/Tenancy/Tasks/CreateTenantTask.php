<?php

namespace App\Containers\Tenancy\Tasks;

use App\Ship\Parents\Tasks\Task;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;

/**
 * Class CreateTenantTask.
 */
class CreateTenantTask extends Task
{

    /**
     * @param $fqdn
     *
     * @return Hostname
     */
    public function run($fqdn)
    {
        $website = new Website();

        app(WebsiteRepository::class)->create($website);
        $hostname = new Hostname();
        $hostname->fqdn = $fqdn;
        $hostname = app(HostnameRepository::class)->create($hostname);
        app(HostnameRepository::class)->attach($hostname, $website);

        return $hostname;
    }
}
