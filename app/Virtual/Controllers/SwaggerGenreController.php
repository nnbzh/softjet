<?php

namespace App\Virtual\Controllers;

abstract class SwaggerGenreController
{
    /**
     * @OA\Get(
     *      path="/api/genres",
     *      description="Get list of genres",
     *      operationId="genreList",
     *      tags={"genres"},
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerGenresResource")
     *      ),
     * )
     */
    abstract public function index();
    /**
     * @OA\Post(
     *      path="/api/genres",
     *      description="Create genre",
     *      operationId="createGane",
     *      tags={"genres"},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerCreateGenreRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerGenreResource")
     *      ),
     * )
     */
    abstract public function store();

    /**
     * @OA\Get(
     *      path="/api/genres/{id}",
     *      description="Get genre by id",
     *      operationId="showGenre",
     *      tags={"genres"},
     *     @OA\Parameter(
     *         description="Id ot the genre",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="int"),
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerGenreResource")
     *      ),
     *      ),
     * )
     */
    abstract public function show();

    /**
     * @OA\Put(
     *      path="/api/genres/{id}",
     *      description="Edit genre by id",
     *      operationId="editGenre",
     *      tags={"genres"},
     *     @OA\Parameter(
     *         description="Id ot the genre",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="int"),
     *     ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerUpdateGenreRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/SwaggerGenreResource")
     *      ),
     *      ),
     * )
     */
    abstract public function update();

    /**
     * @OA\Delete(
     *      path="/api/genres/{id}",
     *      description="Delete genre by id",
     *      operationId="deleteGenre",
     *      tags={"genres"},
     *     @OA\Parameter(
     *         description="Id ot the genre",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="int"),
     *     ),
     *       @OA\Response(
     *          response=200,
     *          description="New edited product",
     *       ),
     *      ),
     * )
     */
    abstract public function destroy();
}
