<?php

namespace App\Virtual\Controllers;

abstract class SwaggerController
{
    /**
     * @OA\Info(title="Game API", version="1.0")
     **/
    abstract public function index();
}
