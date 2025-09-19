<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Check tài khoản admin đặc biệt từ .env
    if (
        $credentials['email'] === env('ADMIN_EMAIL') &&
        $credentials['password'] === env('ADMIN_PASSWORD')
    ) {
        // Tạo user ảo (hoặc tìm user admin trong DB nếu có)
        $admin = User::firstOrCreate(
            ['email' => env('ADMIN_EMAIL')],
            [
                'name' => 'Admin',
                'password' => Hash::make(env('ADMIN_PASSWORD')),
            ]
        );

        Auth::login($admin);
        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    // Login user bình thường
    $user = User::where('email', $credentials['email'])->first();

    if (!$user || !Hash::check($credentials['password'], $user->password)) {
        return back()->withErrors([
            'email' => 'Sai email hoặc mật khẩu.',
        ]);
    }
    Auth::login($user);
    $request->session()->regenerate();

    return redirect()->route('home');
}

    public function register(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:6',
        'address' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
    ]);

    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'address' => $validated['address'] ?? null,
        'phone' => $validated['phone'] ?? null,
    ]);

    Auth::login($user);
    $request->session()->regenerate();

    if (strtolower($user->email) === strtolower(env('ADMIN_EMAIL'))) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('home');
}

}