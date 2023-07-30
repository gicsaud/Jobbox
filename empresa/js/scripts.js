$(document).ready(function(){

    $('#email_empresa').click(
        function(){
            if($(this).val()=="name@example.com") {
                $(this).val('');
            }//fim do if
        }//fim da funcao anonima

    );//fim do click no objeto id=email

    $('#senha_empresa').click(
        function(){
            if($(this).val()=="senha_empresa") {
                $(this).val('');
            }//fim do if
        }//fim da funcao anonima
    );//fim do click no objeto de id= senha


   
    $('#botaoLogar').click(
        function(){
            if($('#email_empresa').val()=='' || $('#email_empresa').val()=="name@example.com") {
                $('#mensagem').html("Email invalido");
                $('#mensagem').fadeIn( 300 ).delay( 2000 ).fadeOut ( 400 );
            }else if ($('#senha').val()=='' || $('#senha_empresa').val()=="senha_empresa") {
                $('#mensagem').html("Senha inválida");
                $('#mensagem').fadeIn( 300 ).delay( 2000 ).fadeOut( 400 );
            }else

             {
                //alert("dados recebidos");

               // $.get("conexao.php", function(retornaConexao){
                    //console.log(retornaConexao);
                //});fim do $.get
                let dados;
                dados={
                    email:$('#email_empresa').val(),senha:$('#senha_empresa').val()
                };

                $.post("pesquisaEmpresa.php",dados,function (retornaEmpresa){
                    if(retornaEmpresa=="") {
                        $('#mensagem').html("Empresa não encontrada");
                        $('#mensagem').fadeIn( 300 ).delay( 2000 ).fadeOut( 400 );
                        
                    }else{
                        //$('#mensagem').html("Usuário encontrado");
                        $('#mensagem').fadeIn( 300 ).delay( 2000 ).fadeOut( 400 );
                        window.location.replace("principal.php?id="+retornaEmpresa);
                    }
                });
            }
        });//fim do click no objeto id=botaoLogar
    });
