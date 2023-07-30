<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="./card.css">
<link rel="stylesheet" href="./preloader.css">
<link rel="stylesheet" href="./modal.css">
<link rel="stylesheet" href="./style_profile.css">
<link rel="stylesheet" href="./main.css">
<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
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
        <a href="../PaginaInicial_logadoCandidato.php">
        <img viewBox="0 0 512 512" src="./images/logosjdnv.png" width="50px" height="60px"><path fill="currentColor"  d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z"/></svg></a>
      </div>
    </div>
    <ul class="sidebar-list">
      <li class="sidebar-list-item">
        <a href="../PaginaInicial_logadoCandidato.php">
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
        <a href="../FeedVagasCandidato/index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
          <span>Vagas Disponíveis</span>
        </a>
      </li>
      
      <li class="sidebar-list-item">
        <a href="../pag_dicasCandidato/browse.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash"><line x1="4" y1="9" x2="20" y2="9" />
            <line x1="4" y1="15" x2="20" y2="15" />
            <line x1="10" y1="3" x2="8" y2="21" />
            <line x1="16" y1="3" x2="14" y2="21" /></svg>
          <span>Dicas</span>
        </a>
      </li>
      <li class="sidebar-list-item">
        <a href="../sairCandidato.php">
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
      <h1 class="app-content-headerText">Meu Perfil - Candidato</h1>
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
                echo "<div class='container mt-5'>";
                echo "<div class='row d-flex'>";
                
                echo "<div class='col-md-7'>";
                
                echo "<div class='card p-3 py-4'>";
                echo "<div class='text-center'>";

                echo "<img src='$pastaArquivos$i' width='150px' height='150px' class='rounded-circle'>";
                echo "</div>";
                echo "<div class='mt-3'>";
                echo "<div class='text-center'>";
                echo "<span class='bg-secondary p-1 px-4 rounded text-white'>Candidato</span>";
                echo "<h5 class='mt-2 mb-0'>$nome</h5>";
                
                echo "</div>";
                echo "<br>";
                echo "<span><b>Data de Nascimento: </b>$nascimento_formatado</span>";
                echo "<span><br><b>Telefone: </b>$telefone <br>  <b>Email: </b>$email</h6></span>";
                echo "<span><br> <b> Categoria de CNH:</b> $categoria_cnh</span>";

                echo "<span> <br><b> Cep:</b> $cep <br><b> Rua:</b> $rua <br><b> Bairro:</b> $bairro <br><b> Número:</b> $num <br> <b>Complemento:</b> $complemento </span>";
                  echo "<br>";
                echo "<br>";
                echo "<br><br><a class=btn href=#altera_candidato_modal> Alterar </a>";
              
               
                
                
                
                
?>
<div id=altera_candidato_modal class=modal>";
  <button><a href=#fechar title=Fechar class=fechar> X </a> </button>
 
 
 
     <div class="limiter">
     <div class="container-login100">
 
    
<form class="login100-form validate-form" action="altera_candidato.php" method="POST">


<span class="login100-form-title">
    Editar Perfil
</span>
<input class="input100" type="hidden" id="id_candidato" name="id_candidato" readonly value="<?php echo $id?>">

<div class="wrap-input100 validate-input" data-validate="Nome inválido: Digite o nome completo">
    <input class="input100" type="text" name="nome_candidato" id="nome_candidato" placeholder="Nome" value="<?php echo $nome ?>">
    <span class="focus-input100"></span>
    <span class="symbol-input100">

    </span>
</div>


<div class="wrap-input100 validate-input" data-validate="Digite o seu cpf: XXXXXXXX-XX">
    <input class="input100" type="text" name="cpf_candidato" id="cpf_candidato" placeholder="CNPJ"value="<?php echo $cpf ?>">
    <span class="focus-input100"></span>
    <span class="symbol-input100">

    </span>
</div>
<div class="wrap-input100 validate-input" data-validate="Digite sua data de nascimento: dd/mm/aaaa">
                <input class="input100" type="text" name="data_nascimento" id="data_nascimento" placeholder="Data de nascimento" onclick="(this.type='date')" value="<?php echo $data_nascimento ?>">

                <span class="focus-input100"></span>


                </span>
            </div>


<div class="wrap-input100 validate-input" data-validate="Digite um número de contato válido: (XX)XXXX-XXXX">
    <input class="input100" type="text" id="telefone_candidato" name="telefone_candidato" placeholder="Telefone" value="<?php echo $telefone ?>">
    <span class="focus-input100"></span>
    <span class="symbol-input100">

    </span>
</div>
<div class="wrap-input100 validate-input" data-validate="Digite um e-mail válido: ex@abc.xyz">
    <input class="input100" type="email" id="email_candidato" name="email_candidato" placeholder="Email" value="<?php echo $email ?>">
    <span class="focus-input100"></span>
    <span class="symbol-input100">

    </span>
</div>

<div class="wrap-input100 validate-input" data-validate="Digite uma senha válida!">

    <input class="input100" type="password" id="senha_candidato" name="senha_candidato" placeholder="Senha" value="<?php echo $senha ?>">
    <span class="focus-input100"></span>
    <span class="symbol-input100">

    </span>
</div>


<div class="wrap-input100 validate-input" data-validate="Digite seu CEP">
    <input class="borda input100" type="text" id="cep_candidato" name="cep_candidato" placeholder="CEP" value="<?php echo $cep ?>">
    <span class="focus-input100"></span>
    <span class="symbol-input100">

    </span>
</div>

<div class="wrap-input100 validate-input" data-validate="Insira sua rua">
    <input class="input100" type="text" id="rua_candidato" name="rua_candidato" placeholder="Rua" value="<?php echo $rua ?>">
    <span class="focus-input100"></span>
    <span class="symbol-input100">

    </span>
</div>
<div class="wrap-input100 validate-input" data-validate="Insira seu bairro">
    <input class="input100" type="text" id="bairro_candidato" name="bairro_candidato" placeholder="Bairro" value="<?php echo $bairro ?>">
    <span class="focus-input100"></span>
    <span class="symbol-input100">

    </span>
</div>
<div class="wrap-input100 validate-input" data-validate="Insira o número de sua residência">
    <input class="input100" type="text" id="num_candidato" name="num_candidato" placeholder="Número" value="<?php echo $num ?>">
    <span class="focus-input100"></span>
    <span class="symbol-input100">

    </span>
</div>

<div class="wrap-input100 validate-input " data-validate="Insira o complemento: CASA, APTO X">
    <input class="input100" type="text" id="complemento_candidato" name="complemento_candidato" placeholder="Complemento" value="<?php echo $complemento ?>">
    <span class="focus-input100"></span>
    <span class="symbol-input100">

    </span>
</div>



<div class="container-login100-form-btn">
        <input type="submit"  class="login100-form-btn" value="Alterar">



    </div>
 
   
  </div>
<?php
 echo "</div>";
                
 echo "</div>";
 echo "</div>";
 echo "</div>";
                
 echo "</div>";
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
                echo "<br><br><a class=excluir href=../candidato/frm_cadastra_infoBOTAO.php> Adicionar </a>";
                echo "<br><br><a class=btns href=../candidato/exclui_info.php?id=$id_form_prof> Excluir </a>";
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
                echo "<br><br><a class=excluir href=../candidato/frm_cadastra_idiomaBOTAO.php> Adicionar </a>";
                echo "<br><br><a class=btns href=../candidato/exclui_idioma.php?id=$id_idioma> Excluir </a>";
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
    echo "<br><a class=excluir href=../cadastrar_experiencias/exclui_experiencias.php?id=$id> Excluir </a>";
    echo "<br><br><a class=btn href=frm_altera_exp.php?id=$id> Alterar </a>";
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
