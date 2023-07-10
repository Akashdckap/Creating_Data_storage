<?php
require "Model/userModel.php";

class userController{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }
    public function InsertDataBase(){
        header("location:View/createDataBase.php");
    }
    public function createDataBase($dataName){
        $nameOfBase = $dataName['dataBaseName'];
            $this->userModel->dataName($nameOfBase);
            header("location:View/create.php");
    }
    public function getDatabase(){
        $Databases = $this->userModel->showDatabase();
        require "View/createTable.php";
    }
    public function getTable(){
        header("location:/");
    }
    public function createTable($table){
        $dbName = $table['database'];
        $tableName = $table['tableName'];
        $columnName = $table['columnName'];
        $dataType = $table['dataType'];
        
        $this->userModel->createNewTable($dbName,$tableName,$columnName,$dataType);
    }
}