<?php
namespace App\Controllers;
use App\Models\NewsModel;
class NewsController
{
    public $LIMIT = 4;

    public function actionList($page)
    {
        $number = ($page * $this->LIMIT) - $this->LIMIT;
        $total = NewsModel::getCount();
        $query = NewsModel::getList($number, $this->LIMIT);
        $resi = NewsModel::getList($number, 1);
        $numPage = ceil($total / $this->LIMIT);
        $link = "/news/page-";
        $showCount = 2;
        $begin = $page - intval($showCount / 2);
        $array = [
            'numPage' => $numPage,
            'query' => $query,
            'resi' => $resi,
            'page' => $page,
            'link' => $link,
            'begin' => $begin,
            'showCount' => $showCount,
        ];
        $this->render('/news/list', $array);
    }

    public function actionDetail($id)
    {
        $row = NewsModel::getItem($id);
        $array = [
            'row' => $row,
        ];
        $this->render('/news/detail', $array);
    }

    public function render($file, $array)
    {
        extract($array);
        require('views/' . $file . '.php');
    }
    public function getPage($arr)
    {
        extract($arr);
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $page = [
            'page' => $page,
        ];
    }
}