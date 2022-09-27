<?php

namespace App\Virtual\Models;

/**
 * @OA\Schema(
 *     title="Genre",
 *     description="Genre model",
 *     @OA\Xml(
 *         name="Genre"
 *     )
 * )
 */
class SwaggerGenre
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
}
