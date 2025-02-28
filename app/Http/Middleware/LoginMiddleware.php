<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $validator = Validator::make($request->all(), [
            'username' => [
                'required',
                'string'
            ],
            'password' => [
                'required'
            ]
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        return $next($request);
    }
}
