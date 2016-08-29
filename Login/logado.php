<html>

<head>
  <title>Sistema</title>
  <meta charset="UTF-8">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php
    session_start();
        $usuario =  $_SESSION['usuario'];

 if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        echo "<script>
               
                var timeoutID;
                    alert('Você precisa se logar antes para depois utilizar o sistema!')
                    function redirecionar(){
    	               window.location.href = 'index.html'
                    }
                    function delayedAlert() {
                    timeoutID = window.setTimeout(redirecionar, 0000);
                    }
                    delayedAlert();
                    
        </script>";
	}


?>
  <div class="row">
  
    <div class="col-md-6 col-md-offset-3">
    <div class="main">
    <div class="main" id="section3">
    </div>
    <section></section>
    </div>
      <center><h1>Quantas vezes você já usou o sistema:</h1></center>
    </div>
    
    <div class="col-md-3">
      <br>
        <button type="button" name="deslogar" id="deslogar" onclick="redirecionar()" class="btn btn-default">Logout</button>
        <a href="#section2"><button type="button" name="botao" class="btn btn-default">Ir para baixo</button></a>
        <script>
        
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 1500, function(){
          
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
        function redirecionar(){
    	               window.location.href = 'logout.php'
                    }
        </script>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <?php
        session_start();
        $usuario =  $_SESSION['usuario'];
        
       
            $servername = "mysql796.umbler.com";
            $username = "loginraryson";
            $password = "123456789r";
            $dbname = "loginraryson";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT logs FROM registros WHERE usuario = '$usuario'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-bordered'>";
                $cont = 0;
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $cont++;
                    echo "<tr>"."<td>".$cont."</td>"."<td>"."Log: "."</td>"."<td>" . $row["logs"]."</td>"."</tr>";
                }
                echo "</table>";
            }
            $conn->close();
            
        ?>
    </div>
  </div>
  <div class="col-md-3 col-md-offset-9">
  <div class="main" id="section2">
  <section><a href="#section3"><button type="button" name="botao2" class="btn btn-default">Ir para cima</button></a></section>
  </div>
  <br>
  <br>
</body>

</html>