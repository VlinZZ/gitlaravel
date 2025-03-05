<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    public function handle($request, Closure $next, ...$guards)
    {
            // Cek apakah user sudah login
            if (!Auth::check()) {
                return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
            }

            // Cek apakah user memiliki role admin
            if (Auth::user()->role !== 'admin') {
                return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
            }

            return $next($request);
        }
    }

