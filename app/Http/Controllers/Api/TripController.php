<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Trip\TripCollection;
use App\Models\Trip;
use App\Services\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $trips = Trip::paginate(10);
        $data = new TripCollection($trips);

        return ApiResponse::success($data, 'All trips');
    }
}
