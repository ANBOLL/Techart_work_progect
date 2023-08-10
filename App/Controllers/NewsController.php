<?php
namespace App\Controllers;
use App\Models\NewsModel;
class NewsController
{
    public static function fetchData($number, $limit)
    {
        $numPage = NewsModel::getCount();
        $query = NewsModel::getList($number, $limit);
        $resi = NewsModel::getList($number, 1);
        $array = [
            'numPage' => $numPage,
            'query' => $query,
            'resi' => $resi,
        ];
        return $array;
    }
    public static function fetchId($id)
    {
        $entry = NewsModel::getItem($id);
        return $entry;
    }
}