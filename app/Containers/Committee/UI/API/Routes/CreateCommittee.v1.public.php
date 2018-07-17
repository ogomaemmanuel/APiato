<?php

/**
 * @apiGroup           Committee
 * @apiName            createCommittee
 *
 * @api                {POST} /v1/committees Endpoint title here..
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
$router->post('committees', [
    'as' => 'api_committee_create_committee',
    'uses'  => 'Controller@createCommittee',
    'middleware' => [
      'auth:api',
    ],
]);
