<?php
require 'core/router.php';

$router = new router();

$router->get('/','getDataBases');
$router->get('/InsertDB','DataBase');
$router->post('/createDB','createDataBase');
$router->get('/InsertTable','getCreateTable');
$router->post('/createTable','createTable');


$router->routing();