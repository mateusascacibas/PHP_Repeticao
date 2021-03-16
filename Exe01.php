<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <form action="#" method="post">
        <label>Digite um numero: </label>
        <input type="text" name = "num" id = "num">
        <button type="submit">Enviar</button>
    </form>

    <?php
    /**Elabore um programa em PHP que permita mostrar os números entre o intervalo do número
    digitado pelo usuário até o cubo do mesmo. */
        $num = $_POST["num"];
        $cubo = $num * $num * $num;
        $numeros = array();
        
        for($i = $num; $i < $cubo; $i++){
            array_push($numeros,$i);
            
        }
        
        print_r($numeros);

        
       


    ?>
</body>
</html>