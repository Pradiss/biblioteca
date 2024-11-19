<?php 

require "models/BibliotecaModel.php";

class BibliotecaController{

    private $url = "http://localhost/uc8/biblioteca";

    private $bibliotecaModel;

    public function __construct(){
        $this->bibliotecaModel = new Biblioteca();
    }
    
    public function index(){
        $lista_livros = $this->bibliotecaModel->getAllLivros();
        $baseUrl = $this->url;
        require "views/BibliotecaViews.php";
    }

    public function details($isbn){
        
       
        $livroUnico = $this->bibliotecaModel->getById($isbn);

        
        
        $baseUrl = $this->url;
        require "views/DetalhesForm.php";
        
    }

    public function detailsAutor($idAutor){
        
       
        $autorUnico = $this->bibliotecaModel->getByIdAutor($idAutor);

        
        
        $baseUrl = $this->url;
        require "views/DetalhesAutor.php";
        
    }
   

}