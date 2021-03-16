<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    <form action="#" method="post">
    <label>Digite um numero: </label>
    <input type="text" name ="num" id = "num">
    <button type="submit">Enviar</button>
    </form>
    <?php
        $num = $_POST["num"];
        $fatorial = 1;
        for($i = $num; $i > 0; $i --){
            $fatorial = $i * $fatorial;
        }

        if($num <> ""){
            echo '<script type="text/javascript">alert("O fatorial do numero '. $num . ' é '. $fatorial .'") </script>';
        }
     
    ?>
    
</body>
</html>