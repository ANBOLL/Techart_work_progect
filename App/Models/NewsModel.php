<?php
namespace App\Models;
use App\DB;
class NewsModel
{
	public static function getCount()
	{
		$resCount = DB::connectDb()->query("SELECT COUNT(*) FROM news");
		$row = $resCount->fetch();
		$total = $row[0];
		return $total;
	}

	public static function getList($offset, $limit)
	{
		$query = DB::connectDb()->query("SELECT *,DATE_FORMAT(date,'%d.%m.%y') dt FROM news ORDER BY date DESC LIMIT $offset, $limit");
		return $query;
	}

	public static function getItem($id)
	{
		$entry = DB::connectDb()->prepare("SELECT *,DATE_FORMAT(date,'%d.%m.%y') dt FROM news WHERE id=?");
		$entry->bindValue(1, $id, \PDO::PARAM_INT);
        $entry->execute();
        $row = $entry->fetch();
		return $row;
	}
}

