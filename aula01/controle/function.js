$(document).ready(function(){

    $('.btn-send').click(function(e){

        e.preventDefault()
        

        //Coletar o que foi escrito e seecionado em nosso formulário
        let dados = $('#form').serialize()

        $('#retorno').empty()

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/function.php',
            success: function(dados){
            $('#retorno').append(`
            <div class="col-12 col-sm-8 col-md-6">
                <div class="alert-primary">
                    <h1 class="text-center text-dark">
                        ${dados.mensagens}
                    </h1>
                </div>
                <img src="../../img/${dados.tipo}" class="img-fluid">
            </div>
            `)
                

            }
        })

    })
})