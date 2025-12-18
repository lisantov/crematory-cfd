<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors
{
    public function handle(Request $request, Closure $next): Response
    {
        // Разрешаем все origin для разработки
        $origin = $request->header('Origin') ?: 'http://localhost:5173';

        $headers = [
            'Access-Control-Allow-Origin'      => $origin,
            'Access-Control-Allow-Methods'     => 'GET, POST, PUT, DELETE, OPTIONS, PATCH',
            'Access-Control-Allow-Headers'     => 'Content-Type, Authorization, X-Requested-With, X-CSRF-TOKEN, Accept, Origin, X-Socket-ID',
            'Access-Control-Allow-Credentials' => 'true',
            'Access-Control-Max-Age'           => '86400',
        ];

        // Для preflight OPTIONS запросов
        if ($request->isMethod('OPTIONS')) {
            return response()->json('OK', 200, $headers);
        }

        $response = $next($request);

        // Добавляем заголовки ко всем ответам
        foreach ($headers as $key => $value) {
            $response->headers->set($key, $value);
        }

        return $response;
    }
}
