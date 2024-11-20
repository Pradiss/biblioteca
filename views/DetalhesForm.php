<?php 



    $isbn = $livroUnico["isbn"];
    $titulo = $livroUnico["titulo"];
    $editora = $livroUnico["editora"];
    $idioma = $livroUnico["idioma"];
    $numeroPaginas = $livroUnico["numeroPaginas"];
    $foto = $livroUnico["foto"];
    $descricao = $livroUnico["descricao"];
    $idAutor = $livroUnico["idAutor"];
    $idClassificacao = $livroUnico["idClassificacao"];


    $livros = "

   
<main >
  <div class='card p-5 ' style='max-width: 1500px;'>
    <div class='row g-0'>
     <div class='col-md-4 '>
      <img src='$foto' class='img-fluid rounded-start' alt='...'>
      </div>
     <div class='col-md-8 '>
      <div class='card-body'>
      <p class='card-text'><small class='text-body-secondary'><b>Numero de paginas:</b> $numeroPaginas</small></p>
      <p class='card-text'><small class='text-body-secondary'><b>Editora:</b> $editora</small></p>
        <h5 class='card-title'>$titulo</h5>
        <p class='card-text'>$descricao</p>
        </div>
        
        <a href='[[base-url]]/biblioteca-adm' class='btn btn-md btn-primary '>Voltar</a>
      
      </div>
  </div>
  </div>
</main>
    ";




$header = file_get_contents("views/template/html/header.html");
$footer = file_get_contents("views/template/html/footer.html");
$html = file_get_contents("views/template/html/modeloSite.html");


$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[titulo]]", "Detalhes", $html);
$html = str_replace("[[conteudo]]",$livros,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;