<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="./card.css">
<link rel="stylesheet" href="./modal.css">
<link rel="stylesheet" href="./preloader.css">
<link rel="stylesheet" href="./main.css">
<link rel="stylesheet" href="./style_profile.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>

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
<!-- partial:index.partial.html -->
<div class="app-container">
  <div class="sidebar">
    <div class="sidebar-header">
      <div class="app-icon">
      <a href="../PaginaInicial_logadoEmpresa.php">
        <img viewBox="0 0 512 512" src="./images/logosjdnv.png" width="50px" height="60px"><path fill="currentColor"  d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z"/></svg>
      </a>
      </div>
    </div>
    <ul class="sidebar-list">
      <li class="sidebar-list-item">
        <a href="../PaginaInicial_logadoEmpresa.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          <span>Página Inicial</span>
        </a>
      </li>
      <li class="sidebar-list-item active">
        <a href="./index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          <span>Meu Perfil</span>
        </a>
      </li>
      <li class="sidebar-list-item">
        <a href="../FeedVagasEmpresa/index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
          <span>Vagas Disponíveis</span>
        </a>
      </li>
      <li class="sidebar-list-item">
        <a href="../pag_dicasEmpresa/browse.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash"><line x1="4" y1="9" x2="20" y2="9" />
            <line x1="4" y1="15" x2="20" y2="15" />
            <line x1="10" y1="3" x2="8" y2="21" />
            <line x1="16" y1="3" x2="14" y2="21" /></svg>
          <span>Dicas</span>
        </a>
      </li>
      <li class="sidebar-list-item">
        <a href="../Candidatos_vagas/index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
          <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
          <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
          <span>Candidatos</span>
        </a>
      </li>
      <li class="sidebar-list-item">
        <a href="../sairEmpresa.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-log-out" viewBox="0 0 24 24"><defs/>
        <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/>
      </svg>
          <span>Sair</span>
        </a>
      </li>
    </ul>
    <div class="account-info">
      
      
      
    </div>
  </div>
  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Meu Perfil - Minhas Vagas</h1>
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
      
    </div>
    <div class="app-content-actions">
      <input class="search-bar" id="filtro" placeholder="Pesquisar" type="text">
      <div class="app-content-actions-wrapper">
        <div class="filter-button-wrapper">
          <input type="hidden" class="action-button filter jsFilter">
          <div class="filter-menu">
            
            <div class="filter-menu-buttons">
              <button class="filter-button reset">
                Reset
              </button>
              <button class="filter-button apply">
                Apply
              </button>
              </div>
              </div>
              </div>
              </div>
              <input type="hidden" class="action-button list active" title="List View">
          
        
        <input type="hidden" class="action-button grid" title="Grid View">
          
      </div>
    
    
              <div class="products-area-wrapper tableView">
                <?php 
                include "conexao.php";
                 

                /*2- criando o comando sql para consulta  do registros*/
                $comandoSql = "select * from tb_vaga";
                $comandoEmpresa="select * from tb_empresa";
                $results=mysqli_query($con,$comandoEmpresa);
                $dados=mysqli_fetch_assoc($results);
                
                $resultado = mysqli_query($con, $comandoSql);

                $id=$dados["id_empresa"];
                $nome=$dados["nome_empresa"];
                $cnpj=$dados["cnpj_empresa"];
                $telefone=$dados["telefone_empresa"];
                $email=$dados["email_empresa"];
                $senha=$dados["senha_empresa"];
                $cep=$dados["cep_empresa"];
                $rua=$dados["rua_empresa"];
                $bairro=$dados["bairro_empresa"];
                $num=$dados["num_empresa"];
                $complemento=$dados["complemento_empresa"];

                echo "<div class='bloco'>";
                echo "<div class='container mt-5'>";
                echo "<div class='row d-flex'>";
                
                echo "<div class='col-md-7'>";
                
                echo "<div class='card p-3 py-4'>";
                echo "<div class='text-center'>";

                echo "<img src='https://i.imgur.com/bDLhJiP.jpg' width='100' class='rounded-circle'>";
                echo "</div>";
                echo "<div class='mt-3'>";
                echo "<div class='text-center'>";
                echo "<span class='bg-secondary p-1 px-4 rounded text-white'>Empresa</span>";
                echo "<h5 class='mt-2 mb-0'>$nome</h5>";
                
                echo "</div>";
                echo "<br>";

                
                echo "<span><b>CNPJ: </b>$cnpj</span>";
               
                
                echo "<span><br><b>Telefone: </b>$telefone <br>  <b>Email: </b>$email</h6></span>";
                echo "<span> <br><b> Cep:</b> $cep <br><b> Rua:</b> $rua <br><b> Bairro:</b> $bairro <br><b> Número:</b> $num <br> <b>Complemento:</b> $complemento </span>";
                
                echo "<br>";
                echo "<br>";
                
                echo "<br><br><a class=btns href=frm_altera_empresa.php?id=$id> Alterar </a>";
                //echo "<a class=btn href=#>Candidate-se</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                
                
                echo "<br>";
                echo "<br>";
                
                while ($dados = mysqli_fetch_assoc($resultado)) {
                  $id_vaga = $dados["id_vaga"];
                  $salario_vaga = $dados["salario_vaga"];
                  $carga_horaria = $dados["carga_horaria"];
                  $requisitos_vaga = $dados["requisitos_vaga"];
                  $cargo_vaga = $dados["cargo_vaga"];
                  $quantidade_vaga = $dados["quantidade_vaga"];
                  $nome_empresa = $dados["nome_empresa"];
                  
                
                  echo "<div class='bloco'>";
                  echo "<div class=courses-container>";
                  echo "<div class=course>";
                  echo "<div class=course-preview>";
                  
                  echo "<h6>$nome_empresa</h6>";
                  echo "<h2>$cargo_vaga</h2>";
                 
                  echo "</div>";
                  echo "<div class=course-info>";
                  echo "<div class=progress-container>";
                  
                  echo "</div>";
                  echo "<h6> Salario da Vaga: R$ $salario_vaga</h6>";
                  
                  echo "<h6> Carga horária (h/s): $carga_horaria</h6>";
                  echo "<h6> Requisitos: $requisitos_vaga</h6>";
                  echo "<h6> Quantidade: $quantidade_vaga</h6>";
                  echo "<br>";
                  echo "<br>";
                  echo "<br><a class=excluir href=exclui_vaga.php?id=$id_vaga> Excluir </a>";
                  echo "<br>";
                  echo "<br>";
                  echo "<a class=btn href=#altera_vaga_modal> Alterar </a>";
                  echo "</div>";
                  
                 ?>
                  
   <div id=altera_vaga_modal class=modal>";
 <button><a href=#fechar title=Fechar class=fechar> X </a> </button>



    <div class="limiter">
    <div class="container-login100">

    <form class="login100-form validate-form" action="altera_vaga.php" method="POST">
        


            
        <input class="input100" type="hidden" id="id_vaga" name="id_vaga" readonly value="<?php echo $id_vaga ?>">

        <span class="login100-form-title">
                    Alterar Vaga
                </span>

                <div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o nome da empresa !">
                    <input class="input100" type="text" name="nome_empresa" id="nome_empresa" placeholder="Nome empresa" value="<?php echo $nome_empresa ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o salário !">
                    <input class="input100" type="text" name="salario_vaga" id="salario_vaga" placeholder="Salario" value="<?php echo $salario_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

              
                <div class="wrap-input100 validate-input" data-validate="Digite a carga horária !">
                    <input class="input100" type="text" name="carga_horaria" id="carga_horaria" placeholder="Carga horária" value="<?php echo $carga_horaria?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Digite os requisitos !">
                    <input class="input100" type="text" name="requisitos_vaga" id="requisitos_vaga" placeholder="Requisitos" value="<?php echo $requisitos_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div> <div class="wrap-input100 validate-input" data-validate="Digite o cargo !">
                    <input class="input100" type="text" name="cargo_vaga" id="cargo_vaga" placeholder="Cargo" value="<?php echo $cargo_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Digite a quantidade de vagas!">
                    <input class="input100" type="text" name="quantidade_vaga" id="quantidade_vaga" placeholder="Quantidade" value="<?php echo $quantidade_vaga ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                


                <div class="container-login100-form-btn">
                    <input type="submit"  class="login100-form-btn" value="Alterar">



                </div>

    </form>

  
 </div>
 <?php
    
   
    echo "</div>";
    echo "</div>";
    echo "</div>";
    
    echo "</div>";
    echo "<br>";
    
    echo "<br><br>";
}              
              ?>
              <a href="#abrirModal" class="button_plus"> </a>

<div id="abrirModal" class="modal">

<script src="../js/modo_escuro.js"></script>

<button><a href="#fechar" title="Fechar" class="fechar"> X </a> </button>

<?php include 'frm_cadastra_vaga.php'; ?>

</div>
            
          
        
        
    
</div>
<!-- partial -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./search.js"></script>
  <script  src="./script.js"></script>
  <script  src="./preloader.js"></script>
</body>
</html>
