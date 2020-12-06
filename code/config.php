<?php

return [

	'database' => [

		'name' => 'citrus',
		'username' => 'homestead',
		'password' => 'secret',
		'connection' => 'database1',
		'post' => '3306',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]

];