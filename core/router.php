<?php

require 'Controller/userController.php';
class router
{
    public $router = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new userController();
    }

    public function get($uri,$action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET'
        ];
    }

    public function post($uri,$action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }
    public function put($uri,$action)
    {
        $this->router[] = [
        'uri' => $uri,
        'action' => $action,
        'method' => 'PUT'
        ];
    }
    public function delete($uri,$action)
        {
            $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'DELETE'
            ];
        }

    public function routing()
    {
        foreach ($this->router as $key) {
            if ($key['uri'] === $_SERVER['REQUEST_URI']) {
                if ($key['action']) {
                    switch($key['action']){
                        case 'DataBase':
                           $this->controller->InsertDataBase();
                           break;
                        case 'createDataBase':
                            $this->controller->createDataBase($_POST);
                            break;
                        case 'getDataBases':
                            $this->controller->getDatabase();
                            break;
                        case 'getCreateTable':
                            $this->controller->getTable();
                            break;
                        case 'createTable':
                            $this->controller->createTable($_POST);
                            break;
                    }
                } else {
                    $this->controller->index();
                }
            }
        }

    }
}