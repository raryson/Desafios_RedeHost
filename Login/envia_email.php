<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<?php
    session_start();
    $email = $_SESSION['email'];
    $usuario = $_SESSION['usuario'];
    $senha = $_SESSION['senha'];



    $to      = $email;
    $subject = 'Dados de acesso';
    $message = 'Os seus dados de acessos são Usuário:'. $usuario.'Senha: '.$senha;
    $headers = 'From: noreply@sistemadoraryson.com';

    

    mail($to, $subject, $message, $headers);


?>
    <center>
    <h1>O seu usuário foi criado com sucesso</h1>
    <h1>Você será redirecionado para a página principal em 3 segundos</h1>
    </center>
    <script>
               
                var timeoutID;

                    function redirecionar(){
    	               window.location.href = 'index.html'
                    }
                    function delayedAlert() {
                    timeoutID = window.setTimeout(redirecionar, 3000);
                    }
                    delayedAlert();
                    
        </script>
</body>
</html>