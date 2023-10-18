<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resulatdo</title>
</head>
<body>
    <header>
    <div class="titulo">
        <h1>Calcula IMC</h1>
    </div>
    </header>
    <div  class="main">
    <h1>DADOS</h1>
    <?php 
        if (isset($_POST[['btnEnviar']])){
            include("calcula.php");
            $altura = $_POST["altura"];
            $peso = $_POST["peso"];

            $valor = calculaIMC($altura,$peso);
            echo "O seu valor de IMC é {$valor}";
            exit();
        }
?>
</div>
<footer>
    <h4><a href="https://github.com/karolKaroli">github</a> </h4>
    <h4>@anne_karol_2004</h4>
</footer>
</body>
</html>
