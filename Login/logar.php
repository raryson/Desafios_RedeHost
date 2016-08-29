<?php
session_start();
//pega dados do formulário para criar
require ('validacao.php');
$validar = new Validacao();


if($validar->validarNome($_POST['usuario']) == true){
  




$usuariohtml = $_POST['usuario'];
$senhahtml = $_POST['senha'];

//pega dados do servidor
$servername = "mysql796.umbler.com";
$username = "loginraryson";
$password = "123456789r";
$dbname = "loginraryson";
//faz conexão
$conn = new mysqli($servername, $username, $password, $dbname);

//pega informações do dia

$logs = date('l jS \of F Y h:i:s A');

$_SESSION['usuario'] = $usuariohtml;
$_SESSION['senha'] = $senhahtml;


//verifica conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM contas WHERE usuario = '$usuariohtml' AND senha = '$senhahtml'";
$result = $conn->query($sql);

if ($result->num_rows <= 0) {
    //fazer o insert na tabela de dados
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    echo "<script>
    alert('Usuário ou senha incorretos')
    var timeoutID;
    
    function redirecionar(){
        window.location.href = 'index.html'
    }
    function delayedAlert() {
        timeoutID = window.setTimeout(redirecionar, 0000);
    }
    delayedAlert();
    
    </script>";
}else{
    
    $sql = "INSERT INTO registros (logs, usuario)
    VALUES ('$logs','$usuariohtml')";
    if ($conn->query($sql) === TRUE) {
        
        
        
        echo "<script>
        
        var timeoutID;
        
        function redirecionar(){
            window.location.href = 'redirecionador.html'
        }
        function delayedAlert() {
            timeoutID = window.setTimeout(redirecionar, 0000);
        }
        delayedAlert();
        
        </script>";
    }
};



$conn->close();
}else{
    echo "<script>alert('Para de tentar bugar meu site')
    var timeoutID;
        
        function redirecionar(){
            window.location.href = 'index.html'
        }
        function delayedAlert() {
            timeoutID = window.setTimeout(redirecionar, 0000);
        }
        delayedAlert();</script>";

}
?>