<?php

    $NOME = $_REQUEST ['NOME'];
    $ANIMAL = $_REQUEST ['ANIMAL'];

    if(empty($NOME)){
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existe(m) campo(s) a ser(em) preenchido(s).'
        );

    }else{
        switch ($ANIMAL) {
            case '1': $dados= array(
                "tipo" => 'cachorro.jpg',
                "mensagem" => 'Seja bem vindo ' .$NOME. ', sabemos que você gosta de cachorrinhos' 

            );
                break;
                case '2': $dados= array(
                    "tipo" => 'gato.jpg',
                    "mensagem" => 'Seja bem vindo ' .$NOME. ', sabemos que você gosta de gatinhos' 
    
                );
                    break;
                    case '3': $dados= array(
                        "tipo" => 'coelho.jpg',
                        "mensagem" => 'Seja bem vindo ' .$NOME. ', sabemos que você gosta de coelhinhos' 
        
                    );
                        break;
        }
    }

    echo json_encode($dados);

?>