<?php

namespace App\Virtual\Models;

/**
 * @OA\Schema(
 *     title="Game",
 *     description="Game model",
 *     @OA\Xml(
 *         name="Game"
 *     )
 * )
 */
class SwaggerGame
{
    /**
     * @OA\Property(
     *     title="id",
     *     type="integer",
     * )
     *
     * @var int
     */
    public int $id;

    /**
     * @OA\Property(
     *     title="name",
     *     type="string",
     * )
     *
     * @var string
     */
    public string $name;

    /**
     * @OA\Property(
     *     title="description",
     *     type="string",
     * )
     *
     * @var string
     */
    public string $description;

    /**
     * @OA\Property(
     *     title="genres",
     * )
     *
     * @var \App\Virtual\Models\SwaggerGenre[]
     */
    public $genres;
}
