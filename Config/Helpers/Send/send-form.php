<?php

use Config\Conn\Create;
use Config\Conn\Read;

require("../../../vendor/autoload.php");
// require("../../Defines.php");

$Create = new Create;
$Read = new Read;

sleep(1);

$jSON = array();
$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($getPost['send-ok'])) {
    $jSON['erro'] = true;
} else {

    $Post = array_map("strip_tags", $getPost);
    $Action = $Post["send-ok"];
    unset($Post["send-ok"]);

    switch ($Action) {
        case 'formulario-contato':
            if (!empty($Post["nome"]) && !empty($Post["email"])) {

                $Create->goCreate("lead", $Post);

                if ($Create->getResult()) {
                    /** 
                     * O código abaixo serve para enviar via Json o ultimo cadastro realizado
                     */
                    // $readWhere = "WHERE id=" . $Create->getResult();
                    // $Read->allRead("lead", $readWhere);
                    // foreach ($Read->getResult() as $usuario) {
                    //     extract($usuario);
                    //     $jSON['success'] = array(true, $nome);
                    // }

                    /**
                     * A consulta abaixo pega o último registro cadastrado no banco e envia via Sessão para ser capturado em alguma página do sistema.
                     */
                    // $readWhere = "WHERE id=" . $Create->getResult();
                    // $Read->allRead("lead", $readWhere);
                    // foreach($Read->getResult() as $usuario){
                    //     extract($usuario);
                        
                    //     session_start();
                    //     $_SESSION['nome'] = $nome;
                    //     $_SESSION['email'] = $email;

                    //     $jSON['success'] = true;
                    // }

                    /** Crio a sessão. */
                    session_start();
                    $_SESSION['nome'] = $Post["nome"];
                    $_SESSION['email'] = $Post["email"];
                    $jSON['success'] = true;
                    
                } else {
                    $jSON['erro'] = true;
                }
            }
            break;

        default:
            $jSON['erro'] = true;
            break;
    }
}

echo json_encode($jSON);
