<?php
    class livro {
        //atributos
        public $nautor;
        public $genero;
        public $dtlançamento;
        public $aberto;
        //métodos
        public function __construct()
        {
            $this->nautor = "Vitor Martins";
            $this->genero = "romance";
            $this->dtlancamento = "1948";
        }
        public function getnautor(){ 
            return $this->nautor;
         }
         public function setnautor($n) { 
            return $this->$n; 
         }
         public function getgenero(){
            return $this-> genero;
         }
         public function setgenero($g){
            $this-> $genero;
         }

         public function getdtlancamento(){ 
            return $this->dtlancamento;
         }
         public function setdtlancamento($l) { 
            return $this->$l; 
         }

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