<?php 



    $idAutor = $autorUnico["idAutor"];
    $nomeAutor = $autorUnico["nomeAutor"];
    $sexo = $autorUnico["sexo"];
    $foto = $autorUnico["foto"];
    $biografia = $autorUnico["biografia"];
   


    $autor = "

   
<main>
  <div class='card p-2' style='max-width: 1700px;'>
    <div class='row g-0'>
     <div class='col-md-4'>
      <img src='$foto' class='img-fluid rounded-start' alt='...'>
      </div>
     <div class='col-md-8'>
      <div class='card-body'>
        <h5 class='card-title'>$nomeAutor</h5>
        
        <p class='card-text'><small class='text-body-secondary'><b>Sexo: </b>$sexo</small></p>
        <p class='card-text'><small class=''>$biografia</small></p>
        <a href='[[base-url]]/biblioteca-adm' class=' btn btn-sm btn-primary'>Voltar para Biblioteca</a>
        </div>
         
        
        </div>
        </div>
  </div>
</main>
    ";




$header = file_get_contents("views/template/html/header.html");
$footer = file_get_contents("views/template/html/footer.html");
$html = file_get_contents("views/template/html/modeloAutor.html");


$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[titulo]]", "Detalhes", $html);
$html = str_replace("[[autor]]",$autor,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;