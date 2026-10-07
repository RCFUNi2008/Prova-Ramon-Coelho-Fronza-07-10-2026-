<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prova</title>
</head>
<body>
    <h1>PROVA</h1>

    <form action="" method="POST">
        <label for="comprimento">Comprimento: </label>
        <input type="number" id="comprimento" name="comprimento">
        <br>
        <label for="altura">Altura: </label>
        <input type="number" id="altura" name="altura">
        <br>    
        <button type="submit">Calcular</button>
    </form>

    <?php
        $altura = $_POST["altura"];
        $comprimento = $_POST["comprimento"];

        $area = $altura * $comprimento;

        if($altura == $comprimento){
            echo "Area= $area m². Essa metragem é de um quadrado";
        }elseif($altura > $comprimento){
            echo "Area= $area m². Essa metragem é de um retangulo vertical";
        }else{
            echo "Area= $area m². Essa metragem é de um retangulo horizontal";
        }
    ?>
</body>
</html>