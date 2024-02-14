<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request): ?JsonResponse
    {
        return $request->wantsJson()
            ? response()->json(auth()->user())
            : null;
    }
}
