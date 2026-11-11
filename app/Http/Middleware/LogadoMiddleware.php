<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Usertoken;
use App\Models\Usuario;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;

class LogadoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Cookie::has('token') && Cookie::has('usuario_id')) {
            $usuario_id = Cookie::get('usuario_id');
            $token = Cookie::get('token');
            $token_usuario = Usertoken::where('usuario_id', $usuario_id)
                ->where('token', $token)
                ->where('valido_ate', '>', Carbon::now())
                ->first();  
                if ($token_usuario){
                    $usuario = Usuario::find($usuario_id);
                    $request->usuario = $usuario;
                    return $next($request);
                } else{
                    Cookie::forget('usuario_id');
                    Cookie::forget('token');
                    return redirect()->route('login_teste');
                }
        
    } else {
        Cookie::forget('usuario_id');
        Cookie::forget('token');
        
        return redirect()->route('login_teste');
    }

    }
}
