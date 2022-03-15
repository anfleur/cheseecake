<?php

$nome = $_REQUEST['nome'];
$bebida = $_REQUEST['bebida'];
$ano_nascimento = $_REQUEST['ano_nascimento'];
$data = date("Y-m-d");
$idade = date_diff(date_create($ano_nascimento), date_create($data));


if (empty($nome)) {
    $dados = array(
        "mensagem" => 'Existe(m) campo(s) a ser(em) preenchido(s).'
    );
} else {

    if ($idade->format('%y') <= 18) {
        $dados = array(
            "mensagemAlerta" => 'alert-danger',
            "mensagem" =>  'Que mané ' . $bebida . ' ' . $nome . '!' . ' Você é de menor ヽ(`⌒´メ)ノ'
            
        );
    } else {
        $dados = array(
            "mensagemAlerta" => 'alert-primary',
            "mensagem" => 'Valeu por preencher o formulário ' . $nome . ', agora sabemos que você gosta de ' . $bebida . '! („• ᴗ •„)'
        );
    }

}

echo json_encode($dados);
