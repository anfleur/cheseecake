$(document).ready(function(){

    $('.btn-send').click(function(e){

        e.preventDefault()
        
        alert('Você clicou no botão enviar')

        //Coletar o que foi escrito e seecionado em nosso formulário
        let dados = $('#form').serialize()

        console.log(dados)

    })
})