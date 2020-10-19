<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use \App\Models\User;
class AuthApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();

        if (!$token|| !User::where(['api_token'=>$token])->first())
        {
            return response()->json([
                'error'=>[
                    'code'=>401,
                    'message'=>'Unauthorized'
                ]
            ]);
        }

        return $next($request);
    }
}
