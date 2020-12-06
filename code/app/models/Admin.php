<?php

namespace App\Model;

use App\Core\App;

class Admin
{

	public static function loginCheck($post)
	{

		return App::get('database')->selectMultiple('admin', $post['email'], $post['password']);
	}

	public static function updateComment($post)
	{

		return App::get('database')->update('comments', 'approved', '1', $post['id']);

	}

	public static function selectAll()
	{
		return App::get('database')->selectAll('admin');

	}
}