<?php
namespace App;
class DB
{
	public static function connectDb()
	{
		$host = 'localhost';
		$dbname = 'workspace__test';
		$dbuser = 'root';
		$dbpassword = 'root';
		try {
			$db = new \PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $dbuser, $dbpassword);
            //echo "Connected to $dbname at $host successfully.";
		} catch (PDOException $error) {
			die("Could not connect to the database $dbname :" . $error->getMessage());
		}
		return $db;
	}
}