<?php

namespace App\Http\Middleware;

use App\Http\Util\Jwt;
use Closure;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('Authorization');
        
        $jwt = new Jwt();
        $resultado = $jwt->verificarToken($token);

        
        if($resultado == false){
            return response()->json('token invalido !!',401);
        }else{
            return $next($request);
        }
        
    }
}
