<?php 

$perfil = "";

foreach($form_usuario as $form ){
    
    $idUsuario = $form["idUsuario"];
    $nome = $form["nome"];
    $endereco = $form["endereco"];
    $bairro = $form["bairro"];
    $cidade = $form["cidade"];
    $uf = $form["uf"];
    $cep = $form["cep"];
    $email = $form["email"];
    $telefone = $form["telefone"];
    $senha = $form["senha"];

    $perfil.="

    <div class='container py-4'>
      <div class='main-body'>
            <div class='row gutters-sm'>
              <div class='col-sm-12 col-md-4 mb-3'>
                <div class='card '>
                  <div class='card-body rounded '>
                    <div class='d-flex flex-column align-items-center text-center'>
                      <img src='img/man-890877_640.jpg' alt='Admin' class='rounded' width='100'>
                      <div class='mt-3 text-light'>
                        <h4>$nome</h4>
                        <p class='text-secondary mb-1'>Integrante da Banda:<a href='perfil1.html' class='mx-1'>BLAST</a></p> 
                        <p class='text-secondary mb-1'>Guitarrista | Baile</p>
                        <p class='text-secondary font-size-sm'>Limeira, São Paulo </p>
                        <!-- <a href='#'><button class='btn btn-md botaoCard'>Contratar</button></a> -->
                        <a href='chat.html'><button class='btn btn-md botaoCard'>Mensagem</button></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='card mt-3 text-light '>
                  <ul class='list-group list-group-flush'>
                    <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <h6 class='mb-0'><i class='mx-1 bi bi-whatsapp'></i>whatsapp</h6>
                      <span class='text-secondary'>(19) 9 8980-4539</span>
                    </li>
                    <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <h6 class='mb-0'><i class='mx-1 bi bi-instagram'></i>Instagram</h6>
                      <span class='text-secondary'>JohnS</span>
                    </li>
                    <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <h6 class='mb-0'><i class='mx-1 bi bi-facebook'></i>Facebook</h6>
                      <span class='text-secondary'>JohnS</span>
                    </li>
                    <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <h6 class='mb-0'><i class='mx-1 bi bi-tiktok'></i>Tik-Tok</h6>
                      <span class='text-secondary'>JohnS</span>
                    </li>
                    <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <h6 class='mb-0'><i class='mx-1 bi bi-twitter-x'></i>Twitter</h6>
                      <span class='text-secondary'>JohnS</span>
                    </li>
                  </ul>
                </div>
              </div>
               <div class='col-md-8'>
                <div id='carouselExampleIndicators' class='carousel slide'>
                  <div class='carousel-indicators'>
                    <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
                    <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='1' aria-label='Slide 2'></button>
                    <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='2' aria-label='Slide 3'></button>
                    <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='3' aria-label='Slide 4'></button>
                    <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='4' aria-label='Slide 5'></button>
                  </div>
                  <div class='carousel-inner'>
                    <div class='carousel-item active'>
                      <img src='img/bandateste1.svg' class='d-block w-100' alt='...'>
                    </div>
                    <div class='carousel-item'>
                      <img src='img/bandateste1.svg' class='d-block w-100' alt='...'>
                    </div>
                  </div>
                  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='visually-hidden'>Previous</span>
                  </button>
                  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='visually-hidden'>Next</span>
                  </button>
                </div>
                <div class='card my-3 text-light '>
                  <div class='card-body rounded '>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Nome </h6>
                      </div>
                      <div class='  col-sm-9 text-secondary'>
                        
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Instrumento</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Nome da Banda</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Email</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Whatsapp</i></h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                    
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-3'>
                        <h6 class='mb-0'>Local</h6>
                      </div>
                      <div class='col-sm-9 text-secondary'>
                        
                      </div>
                    </div>
                    <hr>
                    <div class='row'>
                      <div class='col-sm-12'>
                        <a class='btn btn-md botaoCard'  href=''>Editar Dados</a>
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