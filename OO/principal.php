<?php
    include_once("Pessoa.php");
    $pessoa = new Pessoa;
    $pessoaDois = new Pessoa;

    $pessoa->nome = "Flávio";
    $pessoaDois->nome = "João";
    $pessoa->RG = 324432342;

    echo $pessoa->nome.' ' .$pessoa->RG. "<br>";
    echo $pessoaDois->nome . ' ' .$pessoaDois->RG."<br>";
?>