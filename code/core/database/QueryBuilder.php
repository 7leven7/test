<?php


class QueryBuilder
{

	protected $pdo;


	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from $table");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	public function insert($table, $parameters)
	{
		$query = sprintf(

			'insert into %s (%s) values (%s)', $table, implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters))

		);

		$statement = $this->pdo->prepare($query);

		$statement->execute($parameters);

	}

	public function selectWhere($table, $field, $condition)
	{
		$statement = $this->pdo->prepare("select * from $table where $field = $condition");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}


	public function selectMultiple($table, $email, $password)
	{

		$statement = $this->pdo->prepare("SELECT * FROM $table WHERE email = '$email' AND password = '$password' ");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);

	}

	public function update($table, $field, $value, $id)
	{

		$statement = $this->pdo->prepare("UPDATE $table SET $field  = '$value' WHERE id = $id");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);

	}
}
