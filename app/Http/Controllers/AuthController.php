<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class AuthController extends Controller implements HasMiddleware
{
    /**
     * Definimos el middleware especificando el guard 'api'.
     */
    public static function middleware(): array
    {
        return [
            // El middleware auth:api ya protege las rutas,
            // pero internamente el controlador debe saber qué guard usar.
            new Middleware('auth:api', except: ['login']),
        ];
    }

    /**
     * Usamos auth('api') explícitamente en todos los métodos.
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        // Cambiado de auth() a auth('api')
        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'No autorizado'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        // Cambiado de auth() a auth('api')
        return response()->json(auth('api')->user());
    }

    public function logout()
    {
        // Cambiado de auth() a auth('api')
        auth('api')->logout();

        return response()->json(['mensaje' => 'Cierre de sesión exitoso']);
    }

    public function refresh()
    {
        // Cambiado de auth() a auth('api')
        return $this->respondWithToken(auth('api')->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            // Aquí es donde fallaba: auth('api') sí tiene el método factory()
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
