<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class ApiResponse
{
    /**
     * @return JsonResponse
     */
    public static function success($data, string $message = '')
    {
        return Response::json(['status' => 'success', 'message' => $message, 'items' => $data], 200);
    }

    public static function failedValidation(string $message = '')
    {
        return Response::json(['status' => 'Forbidden', 'message' => $message], 403);
    }

    public static function UnAuthorized(string $message = '')
    {
        return Response::json(['status' => 'UnAuthorized Access', 'message' => $message], 401);
    }

    public static function filter($resource, string $keysFromRequest, array $additional = [])
    {
        $keysFromRequest = self::keys($keysFromRequest);
        $keys = [];

        foreach ($keysFromRequest as $key) {
            $keys[$key] = $resource->$key;
        }

        return array_merge($keys, $additional);
    }

    public static function keys(string $keysFromRequest)
    {
        return explode(',', $keysFromRequest);
    }
}
