<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="geraSaida.php">Gerar saida</a>
    <!--Usuario digita nome, altura e peso. -->
    <form method="post" action="imcs.php">
    Nome: <input type="text" name="nome"></input><br>
    Altura: <input type="text" name="altura"></input><br>
    Peso: <input type="text" name="peso"></input><br>
    <button type="submit" name="enviar">Enviar dados</button>
    </form>
</body>
</html>

<?php

    
    criaArquivo();
    insereDados();

    //Função para verificar se o arquivo de armazenamento de usuario existe
    //Caso não exista, ele cria o arquivo
    function criaArquivo(){
        if(!is_file("usuario.txt")){
            $arquivo = fopen("usuario.txt", 'w');
            fclose($arquivo);
        }
    }

    //Salva em arquivo os dados digitados.
    //Um arquivo para todos os usuarios.
    function insereDados(){
        $nome = $_POST['nome'];
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        
        $arquivo = fopen("usuario.txt", 'a');
        $texto = $nome . "\n" . $altura . "\n" . $peso . "\n";
        fwrite($arquivo, $texto);
        fclose($arquivo);
    }
?>