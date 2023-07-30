<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="faq.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./main.css">
  <link rel="stylesheet" type="text/css" href="../css/preloader.css">
  <link rel="stylesheet" type="text/css" href="../navs_candidatoFAQ/style.css">
  <link rel="stylesheet" href="./css/checkmode.css">
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
<?php include '../navs_candidatoFAQ/navNew.php'; ?>

<br>
<span class="login100-form-title">Perguntas mais frequentes</span>

<div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol viewBox="0 0 24 24" id="expand-more">
      <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
      <path d="M0 0h24v24H0z" fill="none" />
    </symbol>
    <symbol viewBox="0 0 24 24" id="close">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
      <path d="M0 0h24v24H0z" fill="none" />
    </symbol>
  </svg>
</div>

<details open>
  <summary>
    Como mudar o tema para escuro/claro?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
    </svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
    </svg>
  </summary>
  <p>Para mudar o tema, ou seja, a cor de fundo, basta acessar a página de configurações. </p>
</details>

<details>

  <summary>
    Como alterar minha senha?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
    </svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
    </svg>
  </summary>
  <p>Para alterar sua senha, dirija-se à página de configurações e procure por ALTERAR SENHA.</p>
</details>

<details>
  <summary>
    Como me candidatar a vagas no Jobbox?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
    </svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
    </svg>
  </summary>
  <p>Para se canditar a uma vaga, você deve apertar o botão de interesse e apenas aguardar a empresa entrar em contato!</p>
</details>

<details>
  <summary>
    Como faço para denunciar um spam?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
    </svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
    </svg>
  </summary>
  <p>Identificou um spam? Entre em contato conosco  pelo  <a href=mailto:<nowiki agentavery@sample.com?subject="link HTML"> jobboxbusiness@gmail.com </a></p>
</details>

<details>
  <summary>
    Tem mais perguntas ou elas não foram respondidas aqui?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
    </svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
    </svg>
  </summary>
  <p>Entre em contato conosco  pelo <a href=mailto:<nowiki agentavery@sample.com?subject="link HTML">jobboxbusiness@gmail.com </a></p>
</details>

<label for="toggle" class="theme-toggler settings-option" id="theme-toggler">
  
  <span class="theme-toggler__label">Modo Claro / Modo Escuro</span>
  <input type="checkbox" id="toggle" class="theme-toggler__checkbox" checked
           />
  <span aria-hidden="true" class="theme-toggler__switch"></span>
  
 
 
 
     
     <script src="vendor/tilt/tilt.jquery.min.js"></script>
     <script >
     $('.js-tilt').tilt({
       scale: 1.1
     })
   </script>
<script  src="../navs_candidatoFAQ/script.js"></script>
<script  src="./js/preloader.js"></script>
<script src="./js/checkmode.js"></script>
</body>
</html>
 
 


