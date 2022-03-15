<?php

$nome = $_REQUEST['nome'];
$bebida = $_REQUEST['bebida'];
$ano_nascimento = $_REQUEST['ano_nascimento'];
$DataAtual = date("Y-m-d");
$idade = date_diff(date_create($ano_nascimento), date_create($DataAtual));


//echo 'Idade é '.$IDADE->format('%y');
//echo $DataAtual;

if (empty($nome)) {
    $dados = array(
        "mensagem" => 'Existe(m) campo(s) a ser(em) preenchido(s).'
    );
} else {

    if ($idade->format('%y') >= 18) {
        $dados = array(
            "B4" => 'alert-success',
            "mensagem" => 'Olá' . $nome . ', A sua bebida favorita é: ' . $bebida
        );
    } else {
        $dados = array(
            "B4" => 'alert-danger',
            "mensagem" => 'Você é menor de idade! ' . $nome . ', não pode beber'
        );
    }

}

echo json_encode($dados);
