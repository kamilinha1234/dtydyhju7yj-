<?php
    class Celular {
        //atributos
        var $modelo;
        var $marca;
        var $numero;
        var $cor;
        var $ligado;

        //métodos
        public function ligar (){
            if ($this ->ligado == true){
                 echo "Seu celular está ligado!";
            } else {
                echo "Seu celular está desligado!";
            }
        }
        function ligar2() {
            $this->ligado = true;
        }

        function desligar() {
            $this->ligado = false;
    }
}
?>