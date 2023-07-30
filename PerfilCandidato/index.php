<?php
    include "conexao.php";
    $comandoCandidato="select * from tb_candidato";
                $resultsCandidato=mysqli_query($con,$comandoCandidato);
                $dados=mysqli_fetch_assoc($resultsCandidato);
                $nome_candidato=$dados["nome_candidato"];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="./card.css">
<link rel="stylesheet" href="./preloader.css">
<link rel="stylesheet" href="./style_profile.css">
<link rel="stylesheet" href="./test/style.css">
<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <li class="sidebar-list-item">
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
      <li class="sidebar-list-item active">
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
      <h1 class="app-content-headerText">Perfil do Candidato <?php echo $nome_candidato; ?></h1>
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
            <label>Category</label>
            <select>
              <option>All Categories</option>
              <option>Furniture</option>                     <option>Decoration</option>
              <option>Kitchen</option>
              <option>Bathroom</option>
            </select>
            <label>Status</label>
            <select>
              <option>All Status</option>
              <option>Active</option>
              <option>Disabled</option>
            </select>
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

//pasta onde estao as imagens de upload
$pastaArquivos='backupImagens/';

//definindo o comando sql a ser usado */
                $comandoSqlFoto="select * from tb_foto_perfil_candidato";
                $comandoCandidato="select * from tb_candidato";
                $results=mysqli_query($con,$comandoCandidato);
                $dados=mysqli_fetch_assoc($results);
//executando o comando sql */
                $resultadoFoto=mysqli_query($con,$comandoSqlFoto);
                $dadosFoto=mysqli_fetch_assoc($resultadoFoto);
                $id=$dadosFoto["id_foto_perfil_candidato"];
                
                $i=$dadosFoto["imagem_candidato"];

                $conexao2 = new PDO('mysql:host=localhost;dbname=bd_jobbox',"root","");
                $comandoCandidato="select * from tb_candidato";
                $results=mysqli_query($con,$comandoCandidato);
                $dados=mysqli_fetch_assoc($results);

                $id=$dados["id_candidato"];
                $nome=$dados["nome_candidato"]; 
                $data_nascimento=$dados["data_nascimento"];  
                $cpf=$dados["cpf_candidato"];
                $telefone=$dados["telefone_candidato"];
                $email=$dados["email_candidato"];
                $senha=$dados["senha_candidato"];
                $cep=$dados["cep_candidato"];
                $rua=$dados["rua_candidato"];
                $bairro=$dados["bairro_candidato"];
                $num=$dados["num_candidato"];
                $complemento=$dados["complemento_candidato"];
                $nascimento_formatado=date_create($data_nascimento);
                $nascimento_formatado=date_format($nascimento_formatado, 'd-m-Y');
                $categoria_cnh=$dados["categoria_cnh"];

                echo "<div class='bloco'>";
                echo "<div class='profile-container'>";
                echo "<div class='profile-header'>";
                
                echo "<div class='profile-picture'>";
                
                echo "<div class='picture-container'>";
                echo "<img src='$pastaArquivos$i' width='150px' height='150px' class='rounded-circle'>";
                echo "</div>";
                echo "</div>";
                echo "<div class='info-container'>";
                echo "<div class='info'>";
                echo "<h1>$nome</h1>";
                echo "<p class='role' style='color: black;'>Candidato</p>";
                
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "<div class='profile-info'>";
                echo "<div class='info-header'>";
                echo "<div class='title'>
                      <h2 style='color: #9d3fd1;'>Informações Pessoais</h2>
                      </div>";
                      echo "<br>";
                echo "<div class='icon'>
                      <i class'fas fa-user-circle'></i>
                      </div>
                      </div>";
                echo "<div class='break'>
                            <hr>
                            </div>";
                echo "<div class='info-body'>
                
                <div class='info-field'>
                    <h3 style='color: #9d3fd1;'>Data de Nascimento</h3>
                    <p style='color: black;'>$nascimento_formatado</p>
                </div></div>";    
                echo "<div class='info-body'>
                
                <div class='info-field'>
                    <h3 style='color: #9d3fd1;'>Celular</h3>
                    <p style='color: black;'>$telefone</p>
                </div></div>";        
                echo "<div class='info-body'>
                
                <div class='info-field'>
                    <h3 style='color: #9d3fd1;'>Email</h3>
                    <p style='color: black;'>$email</p>
                </div> </div>   ";   
                echo "<div class='info-body'>
                
                <div class='info-field'>
                    <h3 style='color: #9d3fd1;'>Categoria de CNH</h3>
                    <p style='color: black;'>$categoria_cnh</p>
                </div> </div>   ";   
                echo "<div class='info-body'>
                
                <div class='info-field'>
                    <h3 style='color: #9d3fd1;'>CEP</h3>
                    <p style='color: black;'>$cep</p>
                </div> </div>   ";   
                echo "<div class='info-body'>
                
                <div class='info-field'>
                    <h3 style='color: #9d3fd1;'>Rua</h3>
                    <p style='color: black;'>$rua</p>
                </div> </div>   ";   
                echo "<div class='info-body'>
                
                <div class='info-field'>
                    <h3 style='color: #9d3fd1;'>Bairro</h3>
                    <p style='color: black;'>$bairro</p>
                </div> </div>   ";  
                echo "<div class='info-body'>
                
                <div class='info-field'>
                    <h3 style='color: #9d3fd1;'>Número</h3>
                    <p style='color: black;'>$num</p>
                </div> </div>   "; 
                echo "<div class='info-body'>
                
                <div class='info-field'>
                    <h3 style='color: #9d3fd1;'>Complemento</h3>
                    <p style='color: black;'>$complemento</p>
                    
                </div></div>   "; 
                echo "</div>";
echo "</div>";
echo "</div>";


                $conexao2 = new PDO('mysql:host=localhost;dbname=bd_jobbox',"root","");
                $comandoInfo="select * from tb_form_prof";
                $resultsInfo=mysqli_query($con,$comandoInfo);
                

                while ($dados = mysqli_fetch_assoc($resultsInfo)) { 
                  $id_form_prof=$dados["id_form_prof"];
                  $nome_instituicao=$dados["nome_instituicao"];
                $nome_curso=$dados["nome_curso"];
                $nivel_formacao=$dados["nivel_formacao"];
                $data_inicio=$dados["data_inicio"];
                $data_termino=$dados["data_termino"];
                $data_inicioFormatado=date_create($data_inicio);
                $data_inicioFormatado=date_format($data_inicioFormatado, 'd-m-Y');
                $data_terminoFormatado=date_create($data_termino);
                $data_terminoFormatado=date_format($data_terminoFormatado, 'd-m-Y');

                echo "<div class='bloco'>";
                echo "<div class=courses-container>";
                
                echo "<div class=course>";
                
                echo "<div class=course-preview>";
                
                echo "<h6>GRADUAÇÃO</h6>";
                echo "<h2>$nome_curso</h2>";
                
                echo "</div>";
               
                echo "<div class=course-info>";
                echo "<div class=progress-container>";
      
                echo "</div>";
                
                echo "<h6> Nome da Instituição: <br> > $nome_instituicao</h6>";
               
                
                echo "<h6><br> Nível de Formação: <br> > $nivel_formacao </h6>";
                
                echo "<h6> <br> Data de início:  <br> > $data_inicioFormatado </h6>";
                echo "<h6><br> Data de término:  <br> > $data_terminoFormatado </h6>";
                echo "<br>";
                echo "<br>";
               
                //echo "<a class=btn href=#>Candidate-se</a>";
                echo "</div>";
                
                echo "</div>";
                echo "</div>";
                
                echo "</div>";
                
                
                echo "<br>";
                echo "<br>";}


                $conexao2 = new PDO('mysql:host=localhost;dbname=bd_jobbox',"root","");
                $comandoIdioma="select * from tb_idioma";
                $resultsIdioma=mysqli_query($con,$comandoIdioma);
                

                while ($dados = mysqli_fetch_assoc($resultsIdioma)) { 
                  $id_idioma=$dados["id_idioma"];
                  $nome_idioma=$dados["nome_idioma"];
                $nivel_fluencia=$dados["nivel_fluencia"];
                

                echo "<div class='bloco'>";
                echo "<div class=courses-container>";
                
                echo "<div class=course>";
                
                echo "<div class=course-preview>";
                
                echo "<h6>IDIOMAS</h6>";
                echo "<h2>$nome_idioma</h2>";
                
                echo "</div>";
               
                echo "<div class=course-info>";
                echo "<div class=progress-container>";
      
                echo "</div>";
                
                echo "<h6> Nível de Fluência: <br> > $nivel_fluencia</h6>";
               
                
                
                echo "<br>";
                echo "<br>";
                
                //echo "<a class=btn href=#>Candidate-se</a>";
                echo "</div>";
                
                echo "</div>";
                echo "</div>";
                
                echo "</div>";
                
                
                echo "<br>";
                echo "<br>";}
                ?>
              <?php
                
                 /*2- criando o comando sql para consulta  do registros*/
                 $comandoSql = "select * from tb_exp_anteriores";

                 $resultado = mysqli_query($con, $comandoSql);

/*4- pegando os dados da consulta criada e exibindo */
while ($dados = mysqli_fetch_assoc($resultado)) {
    $id = $dados["id_exp_anteriores"];
    $cargo_anterior = $dados["cargo_anterior"];
    $uf = $dados["uf"];
    $cidade_empregador_anterior = $dados["cidade_empregador_anterior"];
    $empregador_anterior = $dados["empregador_anterior"];
    $data_admissao = $dados["data_admissao"];
    $data_demissao = $dados["data_demissao"];

     $admissaoFormatada=date_create($data_admissao);
    $admissaoFormatada=date_format($admissaoFormatada, 'd-m-Y');
    $demissaoFormatada=date_create($data_demissao);
    $demissaoFormatada=date_format($demissaoFormatada, 'd-m-Y');

   
    echo "<div class='bloco'>";
    echo "<div class=courses-container>";
    echo "<div class=course>";
    echo "<div class=course-preview>";
    echo "<h6>Experiências Anteriores</h6>";
    echo "<h2>$cargo_anterior</h2>";
    
    echo "</div>";
    echo "<div class=course-info>";
    echo "<div class=progress-container>";
    
    echo "</div>";
    echo "<h6>-> Empregador Anterior: $empregador_anterior</h6>";
    
    echo "<h6>-> Cidade: $cidade_empregador_anterior / $uf</h6>";
    echo "<h6>-> Data de Admissão: $admissaoFormatada</h6>";
    echo "<h6>-> Data de Demiissão: $demissaoFormatada</h6>";
    echo "<br>";
    echo "<br>";
   
    //echo "<a class=btn href=#>Candidate-se</a>";
    echo "</div>";
    
    echo "</div>";
    
    echo "</div>";
    echo "</div>";
    
    echo "<br>";
    echo "<br>";


   
    
    //echo "cargo anterior: $cargo_anterior <br>";
    //echo "uf: $uf <br>";
   // echo "cidade empregador anterior: $cidade_empregador_anterior <br>";
   // echo "empregador_anterior: $empregador_anterior <br>";
    //echo "data_admissao: $data_admissao <br>";
    //echo "data_demissao: $data_demissao <br>";
    



    

    
}
              ?>
              
            
          
        
        
    
</div>
<!-- partial -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./search.js"></script>
  <script  src="./script.js"></script>
  <script  src="./preloader.js"></script>
</body>
</html>
