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
        let usuario_id = $.cookie('usuario_id');
        let token = $.cookie('token');

        let file= $("#imagem")[0].files[0];
        if (file && file.size > 1000000000){
            Swal.fire({
                icon:"warning",
                title:"imagem muito grande",
                text: 'A imagem deve ter até 100MB'
            });
            return
        }

        let formData = new FormData();
        if (file){
            formData.append("imagem", file);
        }

        formData.append("nome", $("#nome").val());
        formData.append("email", $("#email").val());
        formData.append("senha", $("#senha").val());
        formData.append("tipo", $("#tipo").val());
        formData.append("usuario_id_cadastrar", $("#usuario_id").val());
        formData.append("usuario_id", usuario_id);
        formData.append("token", token); 
        

        $.ajax({
            type: "POST",
            url: "../api/usuario_cadastro",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
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