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

    public function getById($idUsuario){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE idUsuario=?");
        $sql->execute([$idUsuario]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($nome,$usuario,$senha,$email){

        $senhaCriptografada = password_hash($senha, PASSWORD_BCRYPT);

        $sql = $this->db->prepare("INSERT INTO usuarios (nome, usuario, senha , email) VALUES (?,?,?,?) ");
        return $sql->execute([$nome, $usuario, $senhaCriptografada , $email]);
    }

    public function update($idUsuario, $nome, $usuario, $email){
        $sql = $this->db->prepare("UPDATE usuarios SET nome=?, usuario=?, email=? WHERE idUsuario=? ");

         $sql->execute([$nome,$usuario, $email,$idUsuario]);
         return $sql->rowCount();
    }
}