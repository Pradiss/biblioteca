<?php 

require "DataBase.php";

class User{

    private $db; 

    public function __construct(){
        $this->db = DataBase::getConexao();

    }

    public function getAllUsuario(){
        $result = $this->db->query("SELECT *FROM usuario");

        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getById($idUsuario){
        $sql = $this->db->prepare("SELECT * FROM usuario WHERE idUsuario=?");
        $sql->execute([$idUsuario]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($nome,$idUsuario,$senha,$email){

        $senhaCriptografada = passoword_hash($senha, PASSWORD_BCRYPT);

        $sql = $this->db->prepare("INSERT INTO usuario (nome, idUsuario, senha , email) VALUES (?,?,?,?) ");
        return $sql->execute([$senha, $idUsuario, $senha , $email]);
    }

}