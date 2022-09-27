<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    /**
     * @param string $message
     * @param mixed $data
     * @param int $code
     * @return JsonResponse
     */
    public function successResponse(string $message = '', mixed $data = [], int $code = 200): JsonResponse
    {
        return response()->json([
            'success'   => true,
            'message'   => $message,
            'data'      => $data,
        ], $code, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param string $message
     * @param array $data
     * @param int $code
     * @return JsonResponse
     */
    public function errorResponse(string $message = '', mixed $data = [], int $code = 500): JsonResponse
    {
        return response()->json([
            'success'   => false,
            'message'   => $message,
            'data'      => $data,
        ], $code);
    }
}
