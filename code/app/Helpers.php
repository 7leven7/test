<?php

class Helpers
{

	public static function trimmed($params)
	{
		array_map(function ($current) {

			if (empty($current)) {

				return null;

			} else {

				return $current;
			}

		}, $params);

		return $params;
	}
}