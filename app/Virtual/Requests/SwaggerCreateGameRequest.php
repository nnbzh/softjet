<?php

namespace App\Virtual\Requests;

/**
 * @OA\Schema(
 *      title="Create game request",
 *      description="Create new game",
 *      type="object",
 *      required={"name", "description", },
 * )
 */
abstract class SwaggerCreateGameRequest
{
    /**
     * @OA\Property(
     *      title="name",
     *      description="Name of the game",
     * )
     *
     * @var string
     */
    public string $name;

    /**
     * @OA\Property(
     *      title="description",
     *      description="Description of the game",
     * )
     *
     * @var string
     */
    public string $description;

    /**
     * @OA\Property(
     *      title="Genres",
     *      description="Array of genres ids",
     *      type = "array",
     *     @OA\Items(type = "int")
     * )
     *
     * @var array
     */
    public array $genres;
}
