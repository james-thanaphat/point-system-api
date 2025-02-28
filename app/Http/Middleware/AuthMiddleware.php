<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization');

        if (!$token || !str_starts_with($token, 'Bearer ')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $token = substr($token, 7);
        $decoded = base64_decode($token);
        if (!$decoded || !str_contains($decoded, '|')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        [$id, $username] = explode('|', $decoded);

        $user = User::lists()->firstWhere('username', $username);

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
