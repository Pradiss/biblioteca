<?php 

require "models/BibliotecaModel.php";

class BibliotecaController{

    private $url = "http://localhost/uc7/biblioteca";

    private $bibliotecaModel;

    public function __construct(){
        $this->bibliotecaModel = new Biblioteca();
    }

    public function index(){
        $lista_livros = $this->bibliotecaModel->getAllLivros();

        $baseUrl = $this->url;

        require "views/BibliotecaViews.php";
    }

}