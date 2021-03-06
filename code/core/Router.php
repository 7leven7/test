<?php

namespace App\Core;


class Router
{


	protected $routes = [

		'GET' => [],
		'POST' => []

	];

	public static function load($file)
	{
		$router = new self;

		require $file;

		return $router;

	}

	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		if (array_key_exists($uri, $this->routes[$requestType])) {

			$params = explode('@', $this->routes[$requestType][$uri]);

			return $this->callAction(...$params);
		}

		throw new \Exception("There is no route for this url"

		);

	}

	protected function callAction($controller, $action)
	{
		$controller = "App\\Controllers\\{$controller}";

		$controller = new $controller;

		if (!method_exists($controller, $action)) {

			throw new Exception("{$controller} can't find action: {$action}"

			);

		}
		return $controller->$action();
	}

}