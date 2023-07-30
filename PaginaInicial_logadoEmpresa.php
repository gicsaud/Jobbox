<!doctype html>
<html>
  <head>
    

    <meta charset="utf-8">

    <link rel="icon" href="../../../../favicon.ico">

    <link href="css/carousel.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/darkmode.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'><link rel="stylesheet" href="./css/carousel.css">
    <link rel="stylesheet" href="./teste_grid/prototipo_grid_painel/dist/style.css">
    <link rel="stylesheet" href="./fonts/poppins">

    <link href="./prototipo_acesso rapido/dist/style.css" rel="stylesheet" type="text/css">
	  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="navs_EmpresaLog/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/checkmode.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="./css/preloader.css">
    <!-- Estilos customizados para esse template -->
 
    
  </head>
  <body>
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  	 <header>
 <?php include 'navs_EmpresaLog/navNew.php'; ?>
     </header>

<main>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"></div>
        <div id="target" class="carousel-item"></div>
        <div class="carousel-item"></div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- partial -->


</main>


  
  <div class="main-area">
    
    
    <section class="content-section">
    <div class="projects-section-header">
    <p style="color: #985bce;">Acesso rápido</p>
    </div>
      <div class="access-links">
        <div class="access-link-wrapper">
          <!-- tamanho imagens icons= 400x400 -->
          <a href="./CriarVagas/index.php">
          <div class="access-icon">
           <img src="./prototipo_acesso rapido/dist/imagens/vagas_emprego_icon.png" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"></a>
              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
              <circle cx="8.5" cy="8.5" r="1.5"/>
              <polyline points="21 15 16 10 5 21"/>
            </svg>
          </div>
          <span class="access-text">Minhas vagas</span>
        </div>
        <div class="access-link-wrapper">
           <a href="./pag_dicasEmpresa/browse.php">
          <div class="access-icon">
           <img src="./prototipo_acesso rapido/dist/imagens/dicas_icon2.png" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-music"></a>
              <path d="M9 18V5l12-2v13"/>
              <circle cx="6" cy="18" r="3"/>                   <circle cx="18" cy="16" r="3"/>
            </svg>
          </div>
          <span class="access-text">Dicas</span>
        </div>
        <div class="access-link-wrapper">
          <div class="access-icon">
          <a href="./FAQEmpresa/FAQ.php"> <img src="./prototipo_acesso rapido/dist/imagens/ajuda_icon2.png" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left"></a>
              <polygon points="5 3 19 12 5 21 5 3"/>
            </svg>
          </div>
          <span class="access-text">Ajuda</span>
        </div>
        <div class="access-link-wrapper">
          <div class="access-icon">
          <a href="./Configs_logadoEmpresa.php"> <img src="./prototipo_acesso rapido/dist/imagens/configuracoes_icon2.png" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left"></a>
              <line x1="17" y1="10" x2="3" y2="10"/>
              <line x1="21" y1="6" x2="3" y2="6"/>
              <line x1="21" y1="14" x2="3" y2="14"/>
              <line x1="17" y1="18" x2="3" y2="18"/>
            </svg>
          </div>
          <span class="access-text">Configurações</span>
        </div>
        <div class="access-link-wrapper">
          <div class="access-icon">
          <a href="./sairEmpresa.php"><img src="./prototipo_acesso rapido/dist/imagens/entrar_icon2.png" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"></a>
              <polygon points="12 2 2 7 12 12 22 7 12 2"/>
              <polyline points="2 17 12 22 22 17"/>
              <polyline points="2 12 12 17 22 12"/>
            </svg>
          </div>
          <span class="access-text">Sair</span>
        </div>
        
    </section>
    
    <hr size="50">
  
<br>

<div class="projects-section">
  
      <div class="projects-section-header">
        
        <p style="color: #985bce;">Sobre nós</p>
        
      </div>
      <div class="projects-section-line">
<div class="project-boxes jsGridView">
 
        <div class="project-box-wrapper">
          <div class="project-box" style="background-color: #b585dd;">
            <div class="project-box-header">
              
              <div class="more-wrapper">
                
                  
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header" style="color: black;" >Nosso Objetivo</p>
          <p class="box-content-subheader">Divulgar as mais variadas vagas de emprego existentes em São José do Rio Preto. </p>
        </div>
        
      </div>
    </div>
    
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #b585dd;">
        <div class="project-box-header">
         
          <div class="more-wrapper">
            
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header" style="color: black;">Entenda que...</p>
          <p class="box-content-subheader">O mundo pode fazer tudo por você, menos a sua parte. Conte com a nossa ajuda!</p>
        </div>
        
        
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box">
        <div class="project-box-header">
          
          <div class="more-wrapper">
            
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header" style="color: black;">Sobre nós</p>
          <p class="box-content-subheader">O Jobbox surgiu a partir de um projeto de TCC, com o objetivo de ajudar os cidadãos de São José do Rio Preto.</p>
        </div>
        
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #b585dd;">
        <div class="project-box-header">
         
          <div class="more-wrapper">
            
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header" style="color: black;">Seja Protagonista</p>
          <p class="box-content-subheader">Conquiste seu emprego dos sonhos e tenha liberdade financeira para realizar seus sonhos.</p>
        </div>
       
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #b585dd;">
        <div class="project-box-header">
         
          <div class="more-wrapper">
            
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header" style="color: black;">Desafios...</p>
          <p class="box-content-subheader">Você enfrentará muitos desafios e perceberá que evoluiu muito a partir deles! </p>
        </div>
        
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #b585dd;">
        <div class="project-box-header">
         
          <div class="more-wrapper">
            
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header" style="color: black;">Você realizado</p>
          <p class="box-content-subheader">O mundo pode fazer tudo por você, menos a sua parte. Conte com nossa ajuda!</p>
        </div>
       
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #b585dd;">
        <div class="project-box-header">
         
          <div class="more-wrapper">
            
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header" style="color: black;">Planos e Metas</p>
          <p class="box-content-subheader">Faça uma lista com seus planos e metas e se comprometa a realizá-las até uma determinada data.</p>
        </div>
       
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #b585dd;">
        <div class="project-box-header">
         
          <div class="more-wrapper">
            
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header" style="color: black;">Jobbox</p>
          <p class="box-content-subheader">O nome Jobbox, em tradução livre, significa "Caixa de Empregos". Nada mais objetivo, né?...</p>
        </div>
       
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #b585dd;">
        <div class="project-box-header">
         
          <div class="more-wrapper">
            
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header" style="color: black;">Nossa Logo</p>
          <p class="box-content-subheader">Nossa logo significa que sua vaga de emprego está dentro da caixa, ou seja, nosso site!</p>
        </div>
        
    </div>
    

</div>

<label for="toggle" class="theme-toggler settings-option" id="theme-toggler">
  
 <span class="theme-toggler__label">Modo Escuro / Modo Claro</span>
 <input type="checkbox" id="toggle" class="theme-toggler__checkbox" checked
          />
 <span aria-hidden="true" class="theme-toggler__switch"></span>
 



    
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  </div>

</div>

<script src="vendor/tilt/tilt.jquery.min.js"></script>
   
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="./navs_EmpresaLog/script.js"></script>
    <script src="./js/modo_escuro.js"></script>
    <script src="./teste_grid/prototipo_grid_painel/dist/script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script><script  src="./js/carousel.js"></script>
    <script  src="./prototipo_acesso rapido/dist/script.js"></script>
    <script src="./js/checkmode.js"></script>
    <script  src="./js/preloader.js"></script>
  </body>
</html>
