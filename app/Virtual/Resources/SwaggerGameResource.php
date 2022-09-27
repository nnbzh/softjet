<?php

namespace App\Virtual\Resources;

/**
 * @OA\Schema(
 *     title="GameResource",
 *     @OA\Xml(
 *         name="GameResource"
 *     )
 * )
 */
class SwaggerGameResource
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
     * @var \App\Virtual\Models\SwaggerGame
     */
    private $data;
}
