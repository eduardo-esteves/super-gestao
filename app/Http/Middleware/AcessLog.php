<?php

namespace App\Http\Middleware;

use Closure;
use Composer\Util\Http\Response;
use Illuminate\Http\Request;
use App\Models\LogMiddleware;

class AcessLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->server('REMOTE_ADDR');
        $rota = $request->getRequestUri();

        LogMiddleware::create([
            'log'   => "O IP => $ip acessou a rota => $rota"
        ]);

        return $next($request);
    }
}
