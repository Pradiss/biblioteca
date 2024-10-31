<?php 

$livros ="";

foreach($lista_livros as $livro){
    $isbn = $livro["isbn"];
    $titulo = $livro["titulo"];
    $editora = $livro["editora"];
    $idioma = $livro["idioma"];
    $numeroPaginas = $livro["numeroPaginas"];
    $foto = $livro["foto"];
    $idAutor = $livro["idAutor"];
    $idClassificacao = $livro["idClassificacao"];


    $livros.= "
    
<main>
    <div class='col' >
        <div class='card ' style='width: 18rem;'>
        <div class='card-body'>
        <h6 class='card-title text-center'>$titulo</h6>
        <img src='$foto' class='card-img-top' alt='...'>
        <span>isbn $isbn</span>
            <p>$idAutor</p>
            <h6 class='card-title'>$editora </h6>
                <p class='card-text'>$idioma </p>
             <span >Numero de Paginas $numeroPaginas</span>
             <br>
            </div>
            <a href='#' class='btn btn-primary'>Reserve Now</a>
         </div>
    </div>
</main>
    ";

}


$header = file_get_contents("views/template/html/header.html");
$footer = file_get_contents("views/template/html/footer.html");
$html = file_get_contents("views/template/html/biblioteca.html");


$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[livros]]",$livros,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;