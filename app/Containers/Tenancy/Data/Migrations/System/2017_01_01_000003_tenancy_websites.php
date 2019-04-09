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

class TenancyWebsites extends Migration
{
    protected $system = true;

    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('uuid');
            $table->string('app_key')->unique();
            $table->string('managed_by_database_connection')
                ->nullable()
                ->comment('References the database connection key in your database.php');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('websites');
    }
}
