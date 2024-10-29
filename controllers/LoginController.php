<?php 

require "models/LoginModel.php";

class LoginController{

    private $url = "http://localhost/uc8/biblioteca";

    private $loginModel;

    public function __construct(){
        $this->loginModel = new Login();

    }

    public function index(){
        $baseUrl = $this->url;
        $erro ="";

        require "views/LoginForm.php";
    }
    public function criar(){
        $this->loginModel->insert($nome,$idUsuario,$senha);
    }

    public function autenticar(){
        $idUsuario = $_POST["idUsuario"];
        $senha = $_POST["senha"];
        $manter_logado = isset($_POST["manter_logado"]) ? true : false;
        $this->loginModel->getByUsuario($idUsuario,$senha,$manter_logado);

        if(isset($_SESSION["erro"])){
            unset($_SESSION["erro"]);
            
            $erro = "<div class= 'alert alert-danger'> Não foi Possível Logar </div>";
            
            $baseUrl = $this->url;

            require "views/LoginForm.php";

        }else {
            header("location: ".$this->url. "/biblioteca-adm");
        }
    }
}