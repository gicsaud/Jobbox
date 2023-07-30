$('.verSenha').click(
    function(){
        let entrada = document.querySelector('#senha');
        if(entrada.getAttribute('type') == 'password') {
            entrada.setAttribute('type', 'text');

        }else {
            entrada.setAttribute('type', 'password');

        }
    });