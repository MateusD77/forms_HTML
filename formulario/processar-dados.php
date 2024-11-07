<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $dataChegada = $_POST["data-chegada"];
    $noites = $_POST["noites"];
    $hospedes = $_POST["hospedes"];
    $valorTotal = $_POST["valor-total"];
    $mensagem = $_POST["mensagem"];

    $server = 'localhost';
    $usuario = 'roots';
    $senha = '';
    $banco = 'formulario-hotel';


    $conn = new mysqli($server, $usuario, $senha, $banco);

    if($conn->connect_erro){
        die("Falha ao se comunicar com o banco de dados: ".$conn->connect_erro);
    }

    


?>