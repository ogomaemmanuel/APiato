<?php

/**
 * @apiGroup           BoardMembers
 * @apiName            createBoardMembers
 *
 * @api                {POST} /v1/boardmembers Endpoint title here..
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
$router->post('boardmembers', [
    'as' => 'api_boardmembers_create_board_members',
    'uses'  => 'Controller@createBoardMembers',
    'middleware' => [
      'auth:api',
    ],
]);
