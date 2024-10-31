<?php 

require "DataBase.php";

class Autor {

    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }

    public function getAllAutor(){
        $result = $this->db->query("SELECT *FROM autor");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}