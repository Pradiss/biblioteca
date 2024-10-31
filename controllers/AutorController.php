<?php

require "models/AutorModel.php";

class AutorController {
    
    private $url = "http://localhost/uc8/biblioteca";

    private $autorModel;

    public function __construct(){
        $this->autorModel = new Autor();

    }

    public function index(){
        $list_autor = $this->autorModel->getAllAutor();
        $baseUrl = $this->url;
        require "views/AutorView.php";
    }
}