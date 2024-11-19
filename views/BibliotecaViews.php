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
  <div class='row '>
     <div class='col'>
      <div class='card w-100'>
      <img src='$foto' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title text-center'>$titulo</h5>
        <p class='card-text'><b> Editora: </b>$editora</p>
        <small class='text-body-secondary'><b>Numero de Paginas: </b> $numeroPaginas</small>
      </div>
      <div class='card-footer '>
        <a href='[[base-url]]/biblioteca-adm/details/$isbn' class='btn btn-primary'>Detalhes</a>
        <a href='[[base-url]]/biblioteca-adm/detailsAutor/$idAutor' class='btn btn-primary'>Autor</a>
      </div>
    </div>
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