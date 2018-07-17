<?php

/**
 * @apiGroup           Committee
 * @apiName            deleteCommittee
 *
 * @api                {DELETE} /v1/committees/:id Endpoint title here..
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
$router->delete('committees/{id}', [
    'as' => 'api_committee_delete_committee',
    'uses'  => 'Controller@deleteCommittee',
    'middleware' => [
      'auth:api',
    ],
]);
