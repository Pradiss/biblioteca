<?php 

$autores ="";

foreach($list_autor as $list){
    $idAutor = $list["idAutor"];
    $nomeAutor = $list["nomeAutor"];
    $sexo = $list["sexo"];
    $foto = $list["foto"];



    $autores.="
         
<main>
    <div class='col' >
        <div class='card ' style='width: 18rem;'>
            <div class='card-body'>
            <img src='$foto' class='card-img-top' alt='...'>
                <h6 class='card-title'></h6>
                <h6 class='card-title text-center'>$nomeAutor</h6>
                <p class='card-text'><strong>Genero:</strong> $sexo </p>
                <br>
                <a href='#' class='btn btn-primary '> Details</a>
                <a href='[[base-url]]/biblioteca-adm' class='btn btn-primary'>Seus Livros</a>
            </div>
        </div>
    </div>
</main>  
    


    ";


}

$header = file_get_contents("views/template/html/header.html");
$footer = file_get_contents("views/template/html/footer.html");
$html = file_get_contents("views/template/html/autor.html");


$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[autores]]",$autores,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);


echo $html;