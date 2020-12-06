<?php


namespace App\Core;

class App
{

	protected static $keys = [];


	public static function bind($key, $value)
	{

		static::$keys[$key] = $value;

	}

	public static function get($key)
	{

		return static::$keys[$key];

	}

}