<?php

/**
 * @apiGroup           Committee
 * @apiName            findCommitteeById
 *
 * @api                {GET} /v1/committees/:id Endpoint title here..
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
$router->get('committees/{id}', [
    'as' => 'api_committee_find_committee_by_id',
    'uses'  => 'Controller@findCommitteeById',
    'middleware' => [
      'auth:api',
    ],
]);
