<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Admin;
use Carbon\Carbon;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->has('id') && $request->has('nivel_acesso')){
            $admin = Admin::Where('usuario_id', $request->id)
            ->where('nivel_acesso', $request->nivel_acesso)
            ->where('valido_ate', '>', Carbon::now())
            ->first();
                if($admin){
                    return $next($request);
                }
                return response()->json(['message' => 'Acesso negado', 'erro' => 's'],200 );

        }else{
            return response()->json(['message' => 'Acesso negado', 'erro' => 's'],200);
         }
    }
}
