<?php

namespace App\Controllers;

use App\Model\Admin;
use App\Model\Comment;
use Helpers;

class AdminController
{
	public function index()
	{
		require 'app/views/login.view.php';
	}

	public function adminLogin()
	{

		$post = Helpers::trimmed($_POST);

		$admin = Admin::loginCheck($post);

		if ($admin[0]['role'] == 'admin') {

			header('Location: /admin');
		} else {
			header('Location: ?message=Wrong credentials for admin!!!');
		}

	}

	public function adminPanel()
	{
		$comments = Comment::selectUnapprovedComments();

		require 'app/views/admin.view.php';

	}

	public function update()
	{
		$post = Helpers::trimmed($_POST);

		Admin::updateComment($post);

		header('Location: /admin');
	}

}