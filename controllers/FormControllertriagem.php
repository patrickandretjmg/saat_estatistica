<?php
require_once __DIR__ . '/../lib/vendor/autoload.php'; // Ajuste o caminho conforme necessário
include("../lib/vendor/autoload.php");

$colaboradores = filter_input(INPUT_POST, 'colaboradores', FILTER_DEFAULT);
$data = filter_input(INPUT_POST, 'data', FILTER_DEFAULT);
$autor = filter_input(INPUT_POST, 'autor', FILTER_DEFAULT);
$cpfCnpj = filter_input(INPUT_POST, 'cpfCnpj', FILTER_DEFAULT);
$reu = filter_input(INPUT_POST, 'reu', FILTER_DEFAULT);
$rcpfCnpj = filter_input(INPUT_POST, 'rcpfCnpj', FILTER_DEFAULT);
$Assunto = filter_input(INPUT_POST, 'Assunto', FILTER_DEFAULT);
$opcao = filter_input(INPUT_POST, 'opcao', FILTER_DEFAULT);
$data = filter_input(INPUT_POST, 'data', FILTER_DEFAULT);
$motivo = filter_input(INPUT_POST, 'motivo', FILTER_DEFAULT);

if ($colaboradores != "" && $data != "" && $autor != "" && $cpfCnpj != "" && $reu != "" && $rcpfCnpj != "" && $Assunto !="" && $opcao != "") {
    // Verificar a opção escolhida
    if ($opcao === "sim" && $data != "") {
        $spreadsheet = new \Classes\ClassSpreadsheet();
        $spreadsheet->insertSheet(
            "1KD5Su_I5OLxFuSP39KdXQ1AObVUP4fxKIiO6QY99tAw",
            "Dados!A1",
            [
                $colaboradores,
                $data,
                $autor,
                $cpfCnpj,
                $reu,
                $rcpfCnpj,
                $Assunto,
                $opcao,
                $data,
                "" // Não há motivo quando a opção é "sim"
            ]
        );
    } elseif ($opcao === "nao" && $motivo != "") {
        $spreadsheet = new \Classes\ClassSpreadsheet();
        $spreadsheet->insertSheet(
            "1KD5Su_I5OLxFuSP39KdXQ1AObVUP4fxKIiO6QY99tAw",
            "Dados!A1",
            [
                $colaboradores,
                $data,
                $autor,
                $cpfCnpj,
                $reu,
                $rcpfCnpj,
                $Assunto,
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
