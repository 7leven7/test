<?php


class Connection
{

	public static function make($config)
	{
		$servername = $config['connection'];
		$username = $config['username'];
		$password = $config['password'];
		$dbname = $config['name'];
		$port = $config['port'];

		try {
			return $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
		} catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}

	}

}