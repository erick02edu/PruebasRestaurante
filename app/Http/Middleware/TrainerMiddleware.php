<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrainerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $trainer = explode('.', $request->getHost())[0];

        if(!User::where('name',$trainer)->exists()){
            abort(404, 'Este restaurante no existe en nuestro registros.');
        }

        return $next($request);
    }
}
