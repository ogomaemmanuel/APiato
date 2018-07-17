<?php

/**
 * @apiGroup           Members
 * @apiName            createMembers
 *
 * @api                {POST} /v1/members Endpoint title here..
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
$router->post('members', [
    'as' => 'api_members_create_members',
    'uses'  => 'Controller@createMembers',
    'middleware' => [
      'auth:api',
    ],
]);
