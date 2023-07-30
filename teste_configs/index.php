<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Accordion</title>
  <link rel="stylesheet" type="text/css" href="../candidato/css/checkmode.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" type="text/css" href="./main.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="accordion js-accordion">
  <div class="accordion__item js-accordion-item active">
    <div class="accordion-header js-accordion-header">Configurações</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    <label for="toggle" class="theme-toggler settings-option" id="theme-toggler">
  
  <span class="theme-toggler__label">Modo Claro / Modo Escuro</span>
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
    <a href="#" style="text-decoration: none;"><input type="button" value="Senha Empresa" class="login100-form-btn" style="text-align: center !important;">
             </a>
             <br>
             <a href="#" style="text-decoration: none;"> <input type="button" value="Senha Candidato" class="login100-form-btn">
             </a>
    </div>
      
        
    </div><!-- end of accordion body -->
  </div><!-- end of accordion item -->
    
      </div><!-- end of sub accordion -->
    </div><!-- end of accordion body -->
  </div><!-- end of accordion item -->
</div><!-- end of accordion -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>
  <script  src="../candidato/js/checkmode.js"></script>
  <script  src="./main.js"></script>
</body>
</html>
