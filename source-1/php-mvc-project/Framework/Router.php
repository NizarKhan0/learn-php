<?php

namespace Framework;

use App\Controllers\ErrorController;
use Framework\Middleware\Authorize;

class Router
{
    protected $routes = [];

    /**
     * Add a new route
     * 
     * @param string $method
     * @param string $uri
     * @param string $action
     * @param array $middleware
     * @return void
     * 
     */

    public function registerRoute($method, $uri, $action, $middleware = [])
    {
        list($controller, $controllerMethod) = explode('@', $action);
        // inspectAndDie($controller);

        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod,
            'middleware' => $middleware,
        ];
    }

    /**
     * Add a GET route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function get($uri, $controller, $middleware = [])
    {
        $this->registerRoute('GET', $uri, $controller, $middleware);
    }

    /**
     * Add a POST route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function post($uri, $controller, $middleware = [])
    {
        $this->registerRoute('POST', $uri, $controller, $middleware);
    }

    /**
     * Add a PUT route
     * 
     * @param string $uri
     * @param string $controller
     * @oaram array $middleware
     * @return void
     */

    public function put($uri, $controller, $middleware = [])
    {
        $this->registerRoute('PUT', $uri, $controller, $middleware);
    }

    /**
     * Add a DELETE route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function delete($uri, $controller, $middleware = [])
    {
        $this->registerRoute('DELETE', $uri, $controller, $middleware);
    }

    /**
     * Route the request
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */

    //  $uri dan $method tu dari index.php sebab dia guna require macam laravel extend
    public function route($uri)
    {

        $requestMethod = $_SERVER['REQUEST_METHOD'];

        //Check for _method input
        if($requestMethod === 'POST' && isset($_POST['_method'])) {
            //Override the request method with the value of_method
            $requestMethod =  strtoupper($_POST['_method']);
        }

        foreach ($this->routes as $route) {

            //Split the current URI into segments
            $uriSegments = explode('/', trim($uri, '/'));
            // inspectAndDie($uriSegments);

            //Split the route URI into segments
            $routeSegments = explode('/', trim($route['uri'], '/'));
            //untuk dd route segments list
            // inspect($routeSegments);

            //Compare URI segments with route segments
            $match = true;

            //Check if the number of segments matches
            if (count($uriSegments) === count($routeSegments) && strtoupper($requestMethod) === $route['method']) {
                $params = [];

                $match = true;

                for ($i = 0; $i < count($uriSegments); $i++) {
                    //If the URI do not match and there is no parameter
                    if($routeSegments[$i] !== $uriSegments[$i] && !preg_match('/\{(.+?)\}/', $routeSegments[$i])) {
                        $match = false;
                        break;
                    }

                    //Check for the param and add it to the params array
                    if (preg_match('/\{(.+?)\}/', $routeSegments[$i], $matches)) {
                        // 1 = id index & i = params
                        $params[$matches[1]] = $uriSegments[$i];
                        // inspectAndDie($params);
                    }
                }

                if($match) {

                    //Check for middleware
                    foreach ($route['middleware'] as $middleware) {
                        (new Authorize())->handle($middleware);
                    }

                    //Extract controller and method
                    $controller = 'App\\Controllers\\' . $route['controller'];
                    $controllerMethod = $route['controllerMethod'];

                    // Instantiate controller
                    $controllerInstance = new $controller();
                    //Call controller method
                    $controllerInstance->$controllerMethod($params);

                    return;
                }
            }

        }

        // Route not found
        ErrorController::notFound();
    }
}