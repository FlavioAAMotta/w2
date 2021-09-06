<?php
    geraArquivoSaida();
    function geraArquivoSaida(){
        $arquivoEntrada = fopen("usuario.txt", "r", FILE_IGNORE_NEW_LINES);
        $arquivoSaida = fopen("saida.txt", "w");
       
        while(!feof($arquivoEntrada)){
            $nome = fgets($arquivoEntrada);
            $altura = (float)fgets($arquivoEntrada);
            $peso = (float)fgets($arquivoEntrada);

            $imc = calculaIMC($altura, $peso);
            $classe = classificacao($imc);
            $resposta = "Olá $nome você tem o imc de $imc e está $classe \n";
            fwrite($arquivoSaida, $resposta);
        }
        fclose($arquivoEntrada);
        fclose($arquivoSaida);
    }

    #region imc
        function calculaIMC($altura, $peso){
            return $peso / pow($altura, 2);
        }
    
        function classificacao($imc){
            if($imc < 18.5){
                return "abaixo do peso";
            }elseif($imc < 24.9){
                return "peso ideal";
            }elseif($imc < 29.9){
                return "sobrepeso";
            }elseif($imc < 34.9){
                return "obesidade 1";
            }elseif($imc < 39.9){
                return "obesidade 2";
            }else{
                return "obesidade 3";
            }
        }
    #endregion
?>