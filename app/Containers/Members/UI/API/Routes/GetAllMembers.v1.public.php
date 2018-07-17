<?php

/**
 * @apiGroup           Members
 * @apiName            getAllMembers
 *
 * @api                {GET} /v1/members Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('members', [
    'as' => 'api_members_get_all_members',
    'uses'  => 'Controller@getAllMembers',
    'middleware' => [
      'auth:api',
    ],
]);
