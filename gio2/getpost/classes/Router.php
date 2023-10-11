<?php

declare(strict_types=1);

namespace classes;

use classes\RouteNotFoundException;

class Router
{
	private array $routes;
	
	public function register(string $route, callable|array $action): self
	{
		$this->routes[$route] = $action;

		return $this;
	
	}

	public function resolve(string $requestUri)
	{

		// Remove the base directory from the request URI
    $basePath = 'getpost';
    $cleanUri = str_replace($basePath, '', $requestUri);
    
    // Ensure clean URI starts with a slash to match registered routes
    $cleanUri = '/' . ltrim($cleanUri, '/');
    
		$route = explode('?', $cleanUri)[0];

		//echo "Route: " . $route . "<br>";

		$action = $this->routes[$route] ?? null;

		//echo "Action: " . var_export($action, true) . "<br>";

		if(! $action) {
			throw new RouteNotFoundException();
		}

		return call_user_func($action);
	}
}