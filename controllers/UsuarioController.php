<?php 

require "models/UsuarioModel.php";

class UsuarioController {

    private $url = "http://localhost/uc8/biblioteca";

    private $usuarioModel;

    public function __construct(){
        $this->usuarioModel = new Usuario();
    }

    public function index(){
        $form_usuario = $this->usuarioModel->getAllUsuario();
        $baseUrl = $this->url;
        require "views/UsuarioView.php";

    }

    public function criar(){
        $baseUrl = $this->url;
        $acao = "criar";

        require "views/UsuarioForm.php";

    }

    public function editar($idUsuario){
        $user = $this->usuarioModel->getById($idUsuario);

        $idUsuario = $user["idUsuario"];
        $nome = $user["nome"];
        $endereco = $user["endereco"];
        $bairro = $user["bairro"];
        $cidade = $user["cidade"];
        $uf = $user["uf"];
        $cep = $user["cep"];
        $email = $user["email"];
        $telefone = $user["telefone"];
        $senha = $user["senha"];


        $baseUrl = $this->url;

        $acao = "editar";
        require "views/UsuarioForm.php";
    }

    public function atualizar(){
        $idUsuario = $_POST["idUsuario"];
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $uf = $_POST["uf"];
        $cep = $_POST["cep"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $senha = $_POST["senha"];

        $acao = $_POST["acao"];

        if($acao == "editar"){
            $idUsuario  = $_POST["idUsuario"];
            $this->usuarioModel->update($senha, $idUsuario, $senha , $email);
        }else{
            $this->usuarioModel->insert($senha, $idUsuario, $senha , $email);
        }
        header("location: ". $this->url . "/usuario");
    }

}