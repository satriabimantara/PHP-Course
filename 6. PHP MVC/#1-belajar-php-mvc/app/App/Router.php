<?php

namespace Satriabimantara\BelajarPhpMvc\App;

class Router
{
    private static array $routes = [];

    public static function add(
        string $httpMethod,
        string $path,
        string $controller,
        string $functionName,
        array $middlewares = []
    ): void {
        self::$routes[] = [
            'httpMethod' => $httpMethod,
            'path' => $path,
            'controller' => $controller,
            'functionName' => $functionName,
            'middlewares' => $middlewares
        ];
    }
    public static function run(): void
    {
        // Define path index 
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        // logic lakukan perulangan untuk menentukan apakah ada di dictionary mapping sebelumnya
        foreach (self::$routes as $route) {
            // Anggap path yang dikirimkan sebagai regex
            $pattern = "#^" . $route['path'] . "$#";
            if (
                preg_match($pattern, $path, $variables) && $httpMethod
                == $route['httpMethod']
            ) {
                // eksekusi dulu middleware sebelum controller, function, dan view di jalankan
                foreach ($route['middlewares'] as $middleware) {
                    $interface = new $middleware;
                    $interface->before();
                }
                // eksekusi controller dari router
                $controller = new $route['controller'];
                $function = $route['functionName'];
                // $controller->$function();

                array_shift($variables);
                call_user_func_array([$controller, $function], $variables);
                return;
            }
        }
        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }
}
