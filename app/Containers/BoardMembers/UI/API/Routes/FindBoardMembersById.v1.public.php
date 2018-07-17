<?php

/**
 * @apiGroup           BoardMembers
 * @apiName            findBoardMembersById
 *
 * @api                {GET} /v1/boardmembers/:id Endpoint title here..
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
$router->get('boardmembers/{id}', [
    'as' => 'api_boardmembers_find_board_members_by_id',
    'uses'  => 'Controller@findBoardMembersById',
    'middleware' => [
      'auth:api',
    ],
]);
