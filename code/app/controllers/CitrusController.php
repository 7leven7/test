<?php

namespace App\Controllers;

use App\Model\Citrus;
use App\Model\Comment;

class CitrusController
{

	public function index()
	{
		$citruses = Citrus::allCitruses();

		$comments = Comment::selectApprovedComments();

		require 'app/views/index.view.php';
	}

}