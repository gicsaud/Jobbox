<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FOOTER-->
    <!--===============================================FOOTER================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./css/style_footer.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--=================================================FORMS==============================================-->
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--======================================================NAVBAR=========================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="./main.css">
   
    
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!--=======================================================DARKMODE========================================-->
    <link rel="stylesheet" type="text/css" href="darkmode.css">
    <!--=======================================================BOTAO REGISTRAR NAVBAR========================================-->
    <link rel="stylesheet" type="text/css" href="css/botao_registrar_navbar.css">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    
    
</head>

<body>
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
        <a href="../template_side/index.php">
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


              <div class="limiter">
        <div class="container-login100">

            
            <form class="login100-form validate-form" action="cadastra_experiencias.php" method="POST">
                <span class="login104-form-title">
                    Nova Experiência
                </span>
                
                <div class="wrap-input108 validate-input" data-validate="Nome inválido: Digite o nome do cargo">
                    <input class="input108" type="text" name="cargo_anterior" id="cargo_anterior" placeholder="Cargo">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>

                <div class="wrap-input108 validate-input" data-validate="Selecione o Estado">

                    <select id="uf" name="uf" class="input107">
                        <option value="SP">Estado</option>
                        <option value="SP">AC</option>
                        <option value="SP">AL</option>
                        <option value="SP">AP</option>
                        <option value="SP">AM</option>
                        <option value="SP">BA</option>
                        <option value="SP">CE</option>
                        <option value="SP">DF</option>
                        <option value="SP">ES</option>
                        <option value="SP">GO</option>
                        <option value="SP">MA</option>
                        <option value="SP">MT</option>
                        <option value="SP">MS</option>
                        <option value="SP">MG</option>
                        <option value="SP">PA</option>
                        <option value="PB">PB</option>
                        <option value="PB">PR</option>
                        <option value="PB">PE</option>
                        <option value="PB">PI</option>
                        <option value="PB">RJ</option>
                        <option value="PB">RN</option>
                        <option value="PB">RS</option>
                        <option value="PB">RO</option>
                        <option value="PB">RR</option>
                        <option value="PB">SC</option>
                        <option value="SP">SP</option>
                        <option value="PB">SE</option>
                        <option value="RJ">TO</option>

                    </select>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input108 validate-input" data-validate="Digite uma cidade">
                    <input class="input107" type="text" name="cidade_empregador_anterior" id="cidade_empregador_anterior" placeholder="Cidade">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input108 validate-input" data-validate="Digite o empregador!">
                    <input class="input107" type="text" name="empregador_anterior" id="empregador_anterior" placeholder="Empregador">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input108 validate-input" data-validate="Selecione a data de admissão!">
                    <input class="input107" type="text" name="data_admissao" id="data_admissao" placeholder="Data de Admissão"
                        onclick="(this.type='date')">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                <div class="wrap-input108 validate-input" data-validate="Selecione a data de demissão!">
                    <input class="input107" type="text" name="data_demissao" id="data_demissao" placeholder="Data de Demissão"
                        onclick="(this.type='date')">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

                    </span>
                </div>
                


                <div class="container-login100-form-btn">
                    <input type="submit"  class="login104-form-btn" value="Cadastrar">



                </div>

                
            </form>
            
    </div>
    </div>
    </div>



    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="js/entrar.js"></script>



</body>

</html>