<?php

namespace App\Ship\Middlewares\Http;

use App\Containers\Authentication\Exceptions\AuthenticationException;
use Exception;
use Illuminate\Auth\Middleware\Authenticate as LaravelAuthenticate;

/**
 * Class Authenticate
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Authenticate extends LaravelAuthenticate
{


}
