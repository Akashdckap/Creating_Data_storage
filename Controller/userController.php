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
        $columnName = count($table['columnName']);
        
        $this->userModel->createNewTable($dbName,$tableName);
        for($i=0;$i<$columnName;$i++){
            $this->userModel->addColumns($dbName,$tableName,$table['columnName'][$i],$table['dataTypes'][$i]);
        }
        header("location:/");
    }
    public function getInsertValues(){
        $Databases = $this->userModel->showDatabase();
        require "View/InsertIntotable.php";
    }
    public function getTableList($dbNames){
        $dbName = $dbNames['database'];
        $_SESSION['database']=$dbName;
        $tables = $this->userModel->getTableNames($dbName);
        require "View/InsertIntotable.php";
    }
    public function getColumn($getDatas){
        $tableName = $getDatas['tablesList'];
        $dbName = $getDatas['dataBase'];
        $getedColumns = $this->userModel->getColumns($tableName,$dbName);
        print_r($getedColumns);
        require "View/InsertIntotable.php";
    }

}