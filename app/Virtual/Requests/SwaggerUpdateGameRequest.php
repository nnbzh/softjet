<?php

namespace App\Virtual\Requests;

/**
 * @OA\Schema(
 *      title="Update game request",
 *      description="Update game",
 *      type="object",
 * )
 */
abstract class SwaggerUpdateGameRequest
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
