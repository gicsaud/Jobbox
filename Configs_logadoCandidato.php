<!doctype html>
<html>

  <head>

    <meta charset="utf-8">
   
  <link rel="stylesheet" type="text/css" href="./navs_configCandidato/style.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./css/checkmode.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'><link rel="stylesheet" href="./css/style_cofigs.css">
<link rel="stylesheet" type="text/css" href="./css/main_configs.css">
<link rel="stylesheet" type="text/css" href="./css/preloader.css">


    

 
    
  </head>
  <?php include './navs_configCandidato/navNew.php'; ?>
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
  
  <div>
<br>

  <h2 style="color: #985bce; text-align: center;"> Configurações </h2><br>
  
  <!-- partial:index.partial.html -->
<div class="accordion js-accordion">
  <div class="accordion__item js-accordion-item active">
    <div class="accordion-header js-accordion-header">Configurações</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    <label for="toggle" class="theme-toggler settings-option" id="theme-toggler">
  
  <span class="theme-toggler__label" style="color: #985bce;">Modo Escuro/ Modo Claro </span>
  <input type="checkbox" id="toggle" class="theme-toggler__checkbox" checked
           />
  <span aria-hidden="true" class="theme-toggler__switch"></span>
    </div>
      
        
    </div
    </div><!-- end of accordion body -->
  </div><!-- end of accordion item -->
  <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">Alterar Senha</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    
             
             <a href="./candidato/enviar_email.php" style="text-decoration: none; text-align: left;"> <input type="button" value="Senha Candidato" class="login100-form-btn">
             </a>
    </div>
      
        
    </div><!-- end of accordion body -->
  </div><!-- end of accordion item -->
  <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">Sair</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    <a href="./sairCandidato.php" style="text-decoration: none;text-align: left;"><input type="button" value="Sair" class="login100-form-btn" style="text-align: center !important;">
             </a>
             
            
    </div>
    </div><!-- end of accordion body -->
  </div><!-- end of accordion item -->
      </div><!-- end of sub accordion -->
    </div><!-- end of accordion body -->
  </div><!-- end of accordion item -->
</div><!-- end of accordion -->
 



    
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  </div>
  <script src="./navs_configCandidato/script.js"></script>
  <script src="./darkmodenew.js"></script> 
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script  src="./js/script_configs.js"></script>
  <script src="./js/checkmode.js"></script>
  <script  src="./js/main_configs.js"></script>
  <script  src="./js/preloader.js"></script>
  </body>
</html>
