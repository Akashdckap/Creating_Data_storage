<?php
session_start();
require 'core/router.php';
require 'Controller/userController.php';


$router = new router();

$router->get('/','getDataBases');
$router->get('/InsertDB','DataBase');
$router->post('/createDB','createDataBase');
$router->get('/InsertTable','getCreateTable');
$router->post('/createTable','createTable');
$router->get('/insertInto','getInsertIntoTable');
$router->get('/insertValues','getTableListFirstAndInsertValues');
$router->post('/selectColumn','selectiveColumn');


$router->routing();