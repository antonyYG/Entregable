<?php
use Illuminate\Support\Facades\Auth;

class  LoginResponse{
    public function toResponse($request)
    {
        $user = Auth::user();

        if (!$user->hasRole('Admin')) {
            Auth::logout();

            return redirect()->route('login')
                ->withErrors([
                    'email' => 'Las credenciales son incorrectas.'
                ]);
        }

        return redirect()->intended('/dashboard');
    }

}
