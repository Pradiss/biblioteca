<?php 


class SairController {

    private $url = "http://localhost/uc8/biblioteca";

    public function index(){
        #remover ou destruir todas as sessões ativas
        session_destroy();

        #redirecionar para o login
        header("location: ". $this->url . "/login");
    }

}