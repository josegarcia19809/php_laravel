<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    use ApiResponse;
    public function __invoke(): JsonResponse
    {
        return $this->successResponse(["status" => "OK", "message" => "Movie App", "data" => []],
            "Health Check");
    }
}
