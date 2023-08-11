<?php
include_once("./App/Autoloader.php");
use App\Controllers\NewsController;
$id = $_GET['id'];
$row = new NewsController();
$row->actionDetail($id);