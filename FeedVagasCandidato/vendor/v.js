$(document).ready(function(){
    $("#assinar").on("click",function(){
        $.ajax({
            url:'vf.php',
            type: 'POST',
            data:{ir:$("#assinar").attr("ir"),ip:$("#assinar").attr("ip")},
            beforeSend: function(){
                $("#assinar").html("Verificando");

            },success: function(data){
                
                $("#assinar").html(data);
            },error: function(){
                
                $("#assinar").html('HOUVE ERRO');
            }
        });
    });
});