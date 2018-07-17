<?php

/**
 * @apiGroup           Members
 * @apiName            deleteMembers
 *
 * @api                {DELETE} /v1/members/:id Endpoint title here..
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
$router->delete('members/{id}', [
    'as' => 'api_members_delete_members',
    'uses'  => 'Controller@deleteMembers',
    'middleware' => [
      'auth:api',
    ],
]);
