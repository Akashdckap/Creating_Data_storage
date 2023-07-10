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
    public function createNewTable($DataBase,$tableName,$column,$type){
        $this->db->query("USE $DataBase; CREATE TABLE $tableName($column $type);");
    }
}