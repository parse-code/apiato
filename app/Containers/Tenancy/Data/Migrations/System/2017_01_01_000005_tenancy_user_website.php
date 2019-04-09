<?php

/*
 * This file is part of the hyn/multi-tenant package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://laravel-tenancy.com
 * @see https://github.com/hyn/multi-tenant
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TenancyUserWebsite extends Migration
{
    protected $system = true;

    public function up()
    {
        Schema::create('user_website', function (Blueprint $table) {
            $table->unsignedInteger('website_id');
            $table->string('username');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_website');
    }
}
