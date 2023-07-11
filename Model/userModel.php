<?php
require "connection.php";

class userModel extends database{
    public function dataName($dbName){
            $this->db->query("CREATE DATABASE $dbName");
    }
    public function showDatabase(){
        $getData = $this->db->query("SHOW DATABASES");
        return $getData->fetchAll(PDO::FETCH_OBJ);
    }
    public function createNewTable($DataBase,$tableName){
        $this->db->query("USE $DataBase; CREATE TABLE $tableName(id int auto_increment, primary key(id));");
    }
    public function addColumns($dBaseName,$tableName,$column,$dataType){
        $this->db->query("USE $dBaseName; ALTER TABLE $tableName ADD COLUMN $column $dataType");
    }
    public function getTableNames($DBList){
        $tableList = $this->db->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$DBList'");
        return $tableList->fetchAll(PDO::FETCH_OBJ);
    }
    public function getColumns($tableName,$dbName){
        $columnList = $this->db->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='$dbName' AND TABLE_NAME='$tableName'");
        return $columnList->fetchAll(PDO::FETCH_OBJ);
    }
}