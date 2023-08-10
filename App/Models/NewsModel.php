<?php
namespace App\Models;
use App\DB;
class NewsModel
{
	public static function getCount()
	{
		$resCount = DB::connectDb()->query("SELECT COUNT(*) FROM news");
		return $resCount;
	}

	public static function getList($offset, $limit)
	{
		$query = DB::connectDb()->query("SELECT *,DATE_FORMAT(date,'%d.%m.%y') dt FROM news ORDER BY date DESC LIMIT $offset, $limit");
		return $query;
	}

	public static function getItem($id)
	{
		$st = DB::connectDb()->prepare("SELECT *,DATE_FORMAT(date,'%d.%m.%y') dt FROM news WHERE id=?");
		return $st;
	}
}

