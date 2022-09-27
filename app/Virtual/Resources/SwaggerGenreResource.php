<?php

namespace App\Virtual\Resources;

/**
 * @OA\Schema(
 *     title="GenreResource",
 *     @OA\Xml(
 *         name="GenreResource"
 *     )
 * )
 */
class SwaggerGenreResource
{
    /**
     * @OA\Property(
     *     title="success",
     * )
     *
     * @var bool $success
     */
    private bool $success;

    /**
     * @OA\Property(
     *     title="message",
     * )
     *
     * @var string $message
     */
    private string $message;

    /**
     * @OA\Property(
     *     title="Data",
     * )
     *
     * @var \App\Virtual\Models\SwaggerGenre
     */
    private $data;
}
