<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="luhn.php" method="post">
        Numero: <input type="text" name="numero"></input><br>
        <button type="submit" name="submit">Verificar</button>
    </form>
</head>
<body>
    <?php
        if(isset($_POST['numero'])){
            $numero = $_POST['numero'];
            validaString($numero);
        }       

        //Ex: 437  2 98
        function validaString($numero){
            $numero = str_replace(" ", "", $numero);//437298
            if(strlen($numero) > 1){
                if(is_numeric($numero)){
                    validaLuhn($numero);
                }else{
                    echo "String inválida, favor digitar um numero";    
                }
            }else{
                echo "String inválida, tamanho deve ser maior que 1";
            }
        }

        function validaLuhn($numero){
            for($i=strlen($numero)-1; $i> 0; $i -= 2){
                $digito = substr($numero, $i-1,1);
                $digitoDobrado = $digito * 2;                
                if($digitoDobrado >= 10){
                    $digitoDobrado -= 9;
                }
                $numero[$i-1] = $digitoDobrado;
            }
            $somatorio = array_sum(str_split($numero));
            /*for($i = 0; $i < strlen($numero); $i++){
                $somatorio += $numero[$i];
            }*/
            if($somatorio % 10 == 0){
                echo "Válido";
            }else{
                echo "Inválido";
            }
        }
    ?>
</body>
</html>