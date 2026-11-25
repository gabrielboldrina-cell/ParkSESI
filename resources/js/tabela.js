$(document).ready(function(){


});

function deletar_usuario(id_usuario){ ;
    let usuario_id = $.cookie('usuario_id');
    let token = $.cookie('token');

    $.ajax({
        type: "delete",
        url: "/api/deletar_usuario",
        data: {
            id_usuario: id_usuario,
            usuario_id: usuario_id,
            token: token,
        },
        dataType: "json",
        success: function (response) {
            if(response.erro == 'n'){
                Swal.fire({
                    icon: 'sucess',
                    title: 'Sucesso',
                    text: 'Usuario deletado com sucesso'
                 }).then(()=> {
                    location.reload();
                 });
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Ocorreu um erro ao deletar o usuario'

                });
            }
        }
    });
}

