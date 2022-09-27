<?php

namespace App\Virtual\Requests;

/**
 * @OA\Schema(
 *      title="Create genre request",
 *      description="Create new genre",
 *      type="object",
 *      required={"name", },
 * )
 */
abstract class SwaggerCreateGenreRequest
{
    /**
     * @OA\Property(
     *      title="name",
     *      description="Name of the genre",
     * )
     *
     * @var string
     */
    public string $name;

    /**
     * @OA\Property(
     *      title="Games",
     *      description="Array of games ids",
     *      type = "array",
     *     @OA\Items(type = "int")
     * )
     *
     * @var array
     */
    public array $games;
}
