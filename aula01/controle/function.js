$(document).ready(function(){

    $('.btn-send').click(function(e){

        e.preventDefault()
        

        //Coletar o que foi escrito e seecionado em nosso formulário
        let dados = $('#form').serialize()

        $('#function').empty()

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/function.php',
            success: function(dados){
            $('#function').append(`
            <div class="col-12 col-sm-8 col-md-6">
                <div class="alert-primary">
                    <h1 class="text-center text-dark">
                        ${dados.mensagem}
                    </h1>
                </div>
                <img src="../../img/${dados.tipo}" class="img-fluid">
            </div>
            `)
                

            }
        })

    })
})