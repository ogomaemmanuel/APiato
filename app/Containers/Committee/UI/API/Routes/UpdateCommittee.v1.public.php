<?php

/**
 * @apiGroup           Committee
 * @apiName            updateCommittee
 *
 * @api                {PATCH} /v1/committees/:id Endpoint title here..
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
$router->patch('committees/{id}', [
    'as' => 'api_committee_update_committee',
    'uses'  => 'Controller@updateCommittee',
    'middleware' => [
      'auth:api',
    ],
]);
