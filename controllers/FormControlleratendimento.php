<?php
require_once __DIR__ . '/../lib/vendor/autoload.php'; // Ajuste o caminho conforme necessário
include("../lib/vendor/autoload.php");

$colaboradores = filter_input(INPUT_POST, 'colaboradores', FILTER_DEFAULT);
$data = filter_input(INPUT_POST, 'data', FILTER_DEFAULT);
$autor = filter_input(INPUT_POST, 'autor', FILTER_DEFAULT);
$cpfCnpj = filter_input(INPUT_POST, 'cpfCnpj', FILTER_DEFAULT);
$reu = filter_input(INPUT_POST, 'reu', FILTER_DEFAULT);
$rcpfCnpj = filter_input(INPUT_POST, 'rcpfCnpj', FILTER_DEFAULT);
$opcao = filter_input(INPUT_POST, 'opcao', FILTER_DEFAULT);
$numero = filter_input(INPUT_POST, 'numero', FILTER_DEFAULT);
$motivo = filter_input(INPUT_POST, 'motivo', FILTER_DEFAULT);
if ($colaboradores != "" && $data != "" && $autor != "" && $cpfCnpj != "" && $reu != "" && $rcpfCnpj !="" && $opcao != "") {
    // Verificar a opção escolhida
    if ($opcao === "sim" && $numero != "") {
        $spreadsheet = new \Classes\ClassSpreadsheet();
        $spreadsheet->insertSheet(
            "1S4lfTCh5sBV3frNQrPs2JnQqC0lkkj2paq-P1RBBW5w",
            "Dados!A1",
            [
                $colaboradores,
                $data,
                $autor,
                $cpfCnpj,
                $reu,
                $rcpfCnpj,
                $opcao,
                $numero,
                "" // Não há motivo quando a opção é "sim"
            ]
        );
    } elseif ($opcao === "nao" && $motivo != "") {
        $spreadsheet = new \Classes\ClassSpreadsheet();
        $spreadsheet->insertSheet(
            "1S4lfTCh5sBV3frNQrPs2JnQqC0lkkj2paq-P1RBBW5w",
            "Dados!A1",
            [
                $colaboradores,
                $data,
                $autor,
                $cpfCnpj,
                $reu,
                $rcpfCnpj,
                $opcao,
                "", // Não há número quando a opção é "nao"
                $motivo
            ]
        );
    } else {
        echo json_encode([
            "div" => "<div class='alert alert-danger text-center' role='alert'>
                        Preencha todos os campos obrigatórios!
                      </div>",
            "result" => "error"
        ]);
        exit; // Encerrar o script se não houver dados suficientes
    }

    echo json_encode([
        "div" => "<div class='alert alert-success text-center' role='alert'>
                    Dados inseridos com sucesso!
                  </div>",
        "result" => "success"
    ]);
} else {
    echo json_encode([
        "div" => "<div class='alert alert-danger text-center' role='alert'>
                    Preencha todos os campos obrigatórios!
                  </div>",
        "result" => "error"
    ]);
}
?>
