<?php

namespace App\Model;

use App\Core\App;


class Comment
{

	public static function insertComment($post)
	{

		return App::get('database')->insert('comments', [
			'email' => $post['email'],
			'name' => $post['name'],
			'comment' => $post['comment_text']
		]);

	}

	public static function selectApprovedComments()
	{

		return App::get('database')->selectWhere('comments', 'approved', '1');

	}

	public static function selectUnapprovedComments()
	{

		return App::get('database')->selectWhere('comments', 'approved', '0');

	}
}