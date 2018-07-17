<?php

/**
 * @apiGroup           Members
 * @apiName            findMembersById
 *
 * @api                {GET} /v1/members/:id Endpoint title here..
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
$router->get('members/{id}', [
    'as' => 'api_members_find_members_by_id',
    'uses'  => 'Controller@findMembersById',
    'middleware' => [
      'auth:api',
    ],
]);
