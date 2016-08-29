<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>



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

    $sql = "SELECT usuario FROM contas WHERE usuario = '$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script Language=JavaScript>alert('Usuário ja existe, tente com outro usuário');
         window.location.href = 'register.html';
        </script>";
    }
  
    if($senha == $confirmasenha){
        $sql = "INSERT INTO contas (usuario, senha)
            VALUES ('$usuario', '$senha')";
            if ($conn->query($sql) === TRUE) {
                
                echo "<script>
                
                var timeoutID;

                    function redirecionar(){
    	               window.location.href = 'envia_email.php'
                    }
                    function delayedAlert() {
                    timeoutID = window.setTimeout(redirecionar, 0000);
                    }
                    delayedAlert();
                    
                </script>";
                
            }else{
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
        }else{
        echo "<script>
                alert('As senhas não são iguais, por favor, confirme a senha.')
                var timeoutID;

                    function redirecionar(){
    	               window.location.href = 'register.html'
                    }
                    function delayedAlert() {
                    timeoutID = window.setTimeout(redirecionar, 2000);
                    }
                    delayedAlert();
                    
                </script>";
    }
    



?>


</html>