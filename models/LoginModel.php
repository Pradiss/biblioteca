<?php 

require "models/DataBase.php"; 

class Login {

    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }

    public function getByUsuario($idUsuario,$senhaDoUsuario,$mater_logado){
        $sql = $this->db->prepare("SELECT * FROM usuario WHERE idUsuario=?");
        $sql = $this->db->execute([$usuario]);
        $resultado = $sql->fecth(PDO::FETCH_ASSOC);

        if($resultado){
            
            $senhaDoBanco = $resultado["senha"];

            if(password_verify($senhaDoUsuario, $senhaDoBanco)){
                $_SESSION["nome_usuario"] = $resultado["nome"];
                return true;
            }
        }
        $_SESSION["erro"] = "Falha no login" ;
        return false;
    }
    
}