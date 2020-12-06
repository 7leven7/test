<?php

namespace App\Model;

use App\Core\App;


class Citrus
{

	public static function allCitruses()
	{

		return App::get('database')->selectAll('citruses');

	}

}