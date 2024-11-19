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


    public function getById($isbn){

        $result = $this->db->prepare("SELECT * FROM livros WHERE isbn = ?");
        $result->execute([$isbn]);
        
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getByIdAutor($idAutor){

        $result = $this->db->prepare("SELECT * FROM autor WHERE idAutor = ?");
        $result->execute([$idAutor]);
        
        return $result->fetch(PDO::FETCH_ASSOC);
    }

   
    
}