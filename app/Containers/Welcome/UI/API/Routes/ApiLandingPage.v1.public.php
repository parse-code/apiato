<?php

/**
 * @apiGroup           Welcome
 * @apiName            ApiLandingPage
 * @api                {get} /v1/ Welcome
 * @apiDescription     Show a message
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * [
 * "Welcome to Apiato (API V1)"
 * ]
 * @apiErrorExample  {json} Error-Response:
 * HTTP/1.1 404 Not Found
 * {
 *   "status":"error",
 *   "message":"Not Found",
 *   "code":404
 * }
 */
$router->get('/', [
    'as'   => 'v1_api_landing_route',
    'uses' => 'Controller@v1ApiLandingPage',
]);
