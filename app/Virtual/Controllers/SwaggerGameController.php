<?php

namespace App\Virtual\Controllers;

abstract class SwaggerGameController
{
    /**
     * @OA\Get(
     *      path="/api/games",
     *      description="Get list of games",
     *      operationId="gameList",
     *      tags={"games"},
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerGamesResource"),
     *      ),
     * )
     */
    abstract public function index();

    /**
     * @OA\Post(
     *      path="/api/games",
     *      description="Create game",
     *      operationId="createGame",
     *      tags={"games"},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerCreateGameRequest"),
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerGameResource"),
     *      ),
     * )
     */
    abstract public function store();

    /**
     * @OA\Get(
     *      path="/api/games/{id}",
     *      description="Get game by id",
     *      operationId="showGame",
     *      tags={"games"},
     *     @OA\Parameter(
     *         description="Id ot the game",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="int"),
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerGameResource"),
     *          ),
     *      ),
     */
    abstract public function show();

    /**
     * @OA\Put(
     *      path="/api/games/{id}",
     *      description="Edit game by id",
     *      operationId="editGame",
     *      tags={"games"},
     *     @OA\Parameter(
     *         description="Id ot the game",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="int"),
     *     ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerUpdateGameRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerGameResource")
     *      ),
     * ),
     */
    abstract public function update();

    /**
     * @OA\Delete(
     *      path="/api/games/{id}",
     *      description="Delete game by id",
     *      operationId="deleteGame",
     *      tags={"games"},
     *     @OA\Parameter(
     *         description="Id ot the game",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="int"),
     *     ),
     *       @OA\Response(
     *          response=200,
     *          description="New edited product",
     *     ),
     * )
     */
    abstract public function destroy();
}
