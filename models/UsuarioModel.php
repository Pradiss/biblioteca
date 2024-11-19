<?php 

require "DataBase.php";

class User{

    private $db; 

    public function __construct(){
        $this->db = DataBase::getConexao();

    }

    public function getAllUsuario(){
        $result = $this->db->query("SELECT *FROM usuarios");

        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getById($usuario){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE usuario=?");
        $sql->execute([$idUsuario]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($nome,$usuario,$senha,$email){

        $senhaCriptografada = passoword_hash($senha, PASSWORD_BCRYPT);

        $sql = $this->db->prepare("INSERT INTO usuarios (nome, usuario, senha , email) VALUES (?,?,?,?) ");
        return $sql->execute([$senha, $usuario, $senha , $email]);
    }

}