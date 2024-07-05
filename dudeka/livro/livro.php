<?php
    class livro {
        //atributos
        public $nautor;
        public $genero;
        public $dtlançamento;
        public $aberto;
        //métodos e metodos especial (getters e setters)
        public function folhear (){
            if ($this->aberto == true){
                echo "<p>Pode folhear o livro!<p>";
            } else {
                echo "<p>Não pode folhear, estou fechado!<p>";
            }
        }

        public function abrir() {
            $this->aberto = true;
        }

        public function fechar() {
            $this->aberto = false;
        }
    }

    ?>