<?php 

require "DataBase.php"; 

class Biblioteca {

    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }

    public function getAllLivros(){
        $result = $this->db->query("SELECT *FROM livros");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}