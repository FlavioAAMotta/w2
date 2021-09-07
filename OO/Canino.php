<?php
class Canino{
    var $mamifero = "É mamifero";
    
    function alterar(){
        $this->mamifero = "Não é mamifero";
    }

    function eh_mamifero($mamifero){
        return $this->mamifero;
    }

    function correr(){
        echo "Correr como um canino";
    }
}
?>