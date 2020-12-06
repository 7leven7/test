<?php

namespace App\Controllers;

use App\Model\Comment;
use Helpers;

class CommentController
{

	public function store()
	{

		$trimmed = Helpers::trimmed($_POST);

		Comment::insertComment($trimmed);

		header('Location: /');
	}

}