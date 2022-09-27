<?php

namespace App\Virtual\Resources;

/**
 * @OA\Schema(
 *     title="GenresResource",
 *     @OA\Xml(
 *         name="GenresResource"
 *     )
 * )
 */
class SwaggerGenresResource
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
     * @var \App\Virtual\Models\SwaggerGenre[]
     */
    private $data;
}
