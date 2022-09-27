<?php

namespace App\Virtual\Resources;

/**
 * @OA\Schema(
 *     title="GamesResource",
 *     @OA\Xml(
 *         name="GamesResource"
 *     )
 * )
 */
class SwaggerGamesResource
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
     * @var \App\Virtual\Models\SwaggerGame[]
     */
    private $data;
}
