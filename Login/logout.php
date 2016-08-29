<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="row">
<div class="col-md-6 col-md-offset-3">
<center><h1>Bye bye</h1>
<img src="byebye.gif"></center>
</div>
</div>
<?php
session_start();


    $_SESSION['email'] = null;
    $_SESSION['usuario'] = null;
    $_SESSION['senha'] = null;




echo "<script>
                
                var timeoutID;
                    
                    function redirecionar(){
    	               window.location.href = 'index.html'
                    }
                    function delayedAlert() {
                    timeoutID = window.setTimeout(redirecionar, 1500);
                    }
                    delayedAlert();
                    
                </script>"



?>

</body>
</html>