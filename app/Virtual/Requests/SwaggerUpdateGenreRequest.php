<?php

namespace App\Virtual\Requests;

/**
 * @OA\Schema(
 *      title="Update genre request",
 *      description="Update genre",
 *      type="object",
 *      required={},
 * )
 */
abstract class SwaggerUpdateGenreRequest
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
