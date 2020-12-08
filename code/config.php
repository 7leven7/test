<?php

return [

	'database' => [

		'name' => 'citrus',
		'username' => 'homestead',
		'password' => 'secret',
		'connection' => 'database1',
		'port' => '3306',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]

];
