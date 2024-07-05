<?php 
   class caderno {
    //atributos
    public $tipo;
    public $cor;
    public $nfolhas;
    public $aberto;
     //métodos especiais e métodos (getters e setters)
     public function __construct()// para construção automaticamente
     {
        $this->tipo = "espiral";
        $this->cor = "azul"; 
     }
     public function getTipo(){ //Getters - permite acesso, dificultando acesso direto, garantindo segurança
        return $this->tipo;
     }
     public function setTipo($t) { //setters - modificam coisas dentro dos objetos, com parâmetros
        return $this->$t; 
     }
     public function getCor(){
        return $this-> cor;
     }
     public function setCor($c){
        $this-> $cor;
     }
     }

    public function  folhear() {
       if ($this ->aberto == true) {
           echo "<P> é possivel folhear o caderno!</P>";
       } else {
        echo "<P> não é possivel folhear, estou fechado! !</P>";
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