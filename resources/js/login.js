$(document).ready(function() {

    $('#entrar').click(function() {
        
        if($('#email').val() === "" || $('#senha').val() === ""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Preencha todos os campos!',
            });
            return;
        }

        var letras = $('#senha').val().length;
        console.log(letras);
        if(letras < 8){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'A senha deve ter pelo menos 8 caracteres!',
            });
            return;
        }

    });

});