$(document).ready(function(){

    $('#email').click(
        function(){
            if($(this).val()=="name@example.com") {
                $(this).val('');
            }//fim do if
        }//fim da funcao anonima

    );//fim do click no objeto id=email

    $('#senha').click(
        function(){
            if($(this).val()=="senha") {
                $(this).val('');
            }//fim do if
        }//fim da funcao anonima
    );//fim do click no objeto de id= senha


    
    $('#botaoLogar').click(
        function(){
            if($('#email').val()=='' || $('#email').val()=="name@example.com") {
                $('#mensagem').html("Email invalido");
                $('#mensagem').fadeIn( 300 ).delay( 2000 ).fadeOut ( 400 );
            }else if ($('#senha').val()=='' || $('#senha').val()=="senha") {
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
                    email:$('#email').val(),senha:$('#senha').val()
                };

                $.post("pesquisaEmpresa.php",dados,function (retornaEmpresa){
                    if(retornaEmpresa=="") {
                        $('#mensagem').html("Usuário não encontrado");
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
