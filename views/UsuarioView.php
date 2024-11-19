<?php 

$perfil = "";

foreach($form_usuario as $form ){
    
    $idUsuario = $form["idUsuario"];
    $usuario = $form["usuario"];
    $nome = $form["nome"];
    $endereco = $form["endereco"];
    $bairro = $form["bairro"];
    $cidade = $form["cidade"];
    $uf = $form["uf"];
    $cep = $form["cep"];
    $email = $form["email"];
    $telefone = $form["telefone"];
    $senha = $form["senha"];
    $foto = $form["foto"];

    $perfil="

    <div class='container '>
      <div class='main-body'>
            <div class='row '>
              <div class='col-sm-12 col-md-4 mb-3'>
                <div class='card '>
                  <div class='card-body rounded '>
                    <div class='d-flex flex-column align-items-center text-center'>
                      <img src='$foto'  class='w-100'>
                      <div class='mt-3 text-light'>
                        <h4>$nome</h4>
                        <p class='text-secondary mb-1'>$nome</p> 
                        <p class='text-secondary mb-1'>$usuario</p> 

                        <p class='text-secondary mb-1'>$cidade| $uf</p>
                        </div>
                      </div>
                  </div>
                </div>
                
              </div>
               <div class='col-md-8 '>
               
                <div class='card text-dark '>
                  <div class='card-body rounded '>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Nome</h6>
                      </div>
                      <div class='  col-sm-9 text-secondary'>
                        $nome
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Usuario</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $usuario
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Email</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $email
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>WhatsApp</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $telefone
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Endereço</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $endereco
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Bairro</i></h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $bairro
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Cidade</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        $cidade
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-12'>
                        <a class='btn btn-primary  href='[[base-url]]/usuario/editar'>Editar Dados</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
    ";


}


$header = file_get_contents("views/template/html/header.html");
$footer = file_get_contents("views/template/html/footer.html");
$html = file_get_contents("views/template/html/usuario.html");

$html = str_replace("[[header]]", $header,$html);
$html = str_replace("[[footer]]", $footer,$html);
$html = str_replace("[[perfil]]", $perfil,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);


echo $html;