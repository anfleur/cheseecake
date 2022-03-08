$(document).ready(function(){

    $('.btn-send').click(function(e){

        e.preventDefault()
        

        //Coletar o que foi escrito e seecionado em nosso formulário
        let dados = $('#form').serialize()

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/function.php',
            success: function(){
            }
        })

    })
})