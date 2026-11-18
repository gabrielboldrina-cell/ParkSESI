$(document).ready(function(){

    $("#cadastrar").click(function(){
        if($("#nome").val() == ""|| $("#email").val() == "" || $("#senha").val() == ""|| $("#tipo").val() == ""){
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Por favor, preencha todos os campos.'

            });
            return false;
        }
        let usuario_id = $.cookie('usuario_id_cadastrar')

        $.ajax({
            type: "POST",
            url: "../api/usuario_cadastro",
            data: {
                nome: $("#nome").val(),
                email: $("#email").val(),
                senha: $("#senha").val(),
                tipo: $("#tipo").val(),
                usuario_id_cadastrar: $('#usuario_id_cadastrar')
            },
            success: function (response) {
                if(response.erro == 'n'){

                    Swal.fire({
                        icon: 'success ',
                        title: 'Deu Bom',
                        text: 'Usuario cadastro com sucesso!'
                    })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Ocorreu um erro ao cadastro o usuario.'

                    });                  
                }               
            }
        });

    });
});