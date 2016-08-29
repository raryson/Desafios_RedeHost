<?php
    session_start();
    //pega dados do formulário para criar
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $confirmasenha = $_POST['senha2'];

    $_SESSION['email'] = $email;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;

    //pega dados do servidor
    $servername = "mysql796.umbler.com";
    $username = "loginraryson";
    $password = "123456789r";
    $dbname = "loginraryson";

    //faz conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    //verifica conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    function verificausuario{
    $sql = "SELECT * FROM contas WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Usuário já existe";
    }};
    verificausuario();






    ?>