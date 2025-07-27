<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Api\Controller;

/**
 * @OA\Post(
 *     path="/api/v1/employees",
 *     description="Add new employee",
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema (
 *                     @OA\Property(property="email", type="string", example="test@tesn.com"),
 *                     @OA\Property(property="first_name", type="string", example="John"),
 *                     @OA\Property(property="last_name", type="string", example="Doe"),
 *                     @OA\Property(property="company_id", type="integer", example="1"),
 *                 )
 *             }
 *         ),
 *     ),
 *     tags={"Employee API"},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="email", type="string", example="test@tesn.com"),
 *                 @OA\Property(property="first_name", type="string", example="John"),
 *                 @OA\Property(property="last_name", type="string", example="Doe"),
 *                 @OA\Property(property="company_id", type="integer", example="1"),
 *             ),
 *         ),
 *     ),
 * ),
 * @OA\Get(
 *      path="/api/v1/employees",
 *      description="Get employees list",
 *      tags={"Employee API"},
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                   @OA\Property(property="email", type="string", example="test@tesn.com"),
 *                   @OA\Property(property="first_name", type="string", example="John"),
 *                   @OA\Property(property="last_name", type="string", example="Doe"),
 *                   @OA\Property(property="company_id", type="integer", example="1"),
 *              )),
 *          ),
 *      ),
 *  ),
 * @OA\Get(
 *       path="/api/v1/employees/{employee}",
 *       description="Get employee info",
 *       tags={"Employee API"},
 *       @OA\Parameter(
 *           description="IDemployee",
 *           in="path",
 *           name="employee",
 *           required=true,
 *           example=1
 *       ),
 *       @OA\Response(
 *           response=200,
 *           description="OK",
 *           @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="email", type="string", example="test@tesn.com"),
 *                  @OA\Property(property="first_name", type="string", example="John"),
 *                  @OA\Property(property="last_name", type="string", example="Doe"),
 *                  @OA\Property(property="company_id", type="integer", example="1"),
 *              ),
 *          ),
 *       ),
 *   ),
 * @OA\Patch(
 *        path="/api/v1/employees/{employee}",
 *        description="Edit employee",
 *        tags={"Employee API"},
 *        @OA\Parameter(
 *            description="ID employee",
 *            in="path",
 *            name="employee",
 *            required=true,
 *            example=1
 *        ),
 *        @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema (
 *                      @OA\Property(property="email", type="string", example="test@tesn.com"),
 *                      @OA\Property(property="first_name", type="string", example="John"),
 *                      @OA\Property(property="last_name", type="string", example="Doe"),
 *                      @OA\Property(property="company_id", type="integer", example="1"),
 *                  )
 *              }
 *          ),
 *        ),
 *        @OA\Response(
 *            response=200,
 *            description="OK",
 *            @OA\JsonContent(
 *               @OA\Property(property="data", type="object",
 *                   @OA\Property(property="email", type="string", example="test@tesn.com"),
 *                   @OA\Property(property="first_name", type="string", example="John"),
 *                   @OA\Property(property="last_name", type="string", example="Doe"),
 *                   @OA\Property(property="company_id", type="integer", example="1"),
 *               ),
 *           ),
 *        ),
 *    ),
 * @OA\Delete(
 *        path="/api/v1/employees/{employee}",
 *        description="Delete employee",
 *        tags={"Employee API"},
 *        @OA\Parameter(
 *            description="ID employee",
 *            in="path",
 *            name="employee",
 *            required=true,
 *            example=1,
 *        ),
 *        @OA\Response(
 *            response=200,
 *            description="OK",
 *            @OA\JsonContent(
 *               @OA\Property(property="message", type="string", example="Employee deleted"),
 *           ),
 *        ),
 *    ),
 */
class EmployeeController extends Controller
{

}
