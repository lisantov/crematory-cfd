<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleWebSocket
{
    public function handle(Request $request, Closure $next): Response
    {
        // Проверяем WebSocket upgrade запрос
        if ($request->header('Upgrade') === 'websocket' ||
            $request->header('Connection') === 'Upgrade') {

            $response = $next($request);

            // WebSocket специфичные заголовки
            $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:5173');
            $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Upgrade, Connection, Sec-WebSocket-Key, Sec-WebSocket-Version, Sec-WebSocket-Extensions, Sec-WebSocket-Protocol');
            $response->headers->set('Access-Control-Allow-Credentials', 'true');

            return $response;
        }

        return $next($request);
    }
}
