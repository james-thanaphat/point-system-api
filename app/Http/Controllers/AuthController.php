<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = User::lists()->firstWhere('username', $username);

        if (!$user || $user['password'] !== $password) {
            return response()->json(['error' => 'อีเมล์หรือรหัสผ่านไม่ถูกต้อง!'], 401);
        }

        $token = base64_encode($user['id'] . '|' . $user['username']);

        return response()->json([
            'message' => 'เข้าสู่ระบบสำเร็จ',
            'token' => $token,
            'user' => $user
        ]);
    }
}
