<?php

    class Figura{
        public $Tipo;
        public $Apelido; 
        public $Area;


        protected function __construct($tip,$ape)
        {
            $this->Tipo=$tip;
            $this->Apelido=$ape;
        }
    }

    class Quadrado extends Figura{
        var $Lado;
        function __construct($tip,$ape,$l){
            parent::__construct($tip,$ape);
            if($l==""){
                $l=0;
            }
            $this->Lado=$l;
        }

        function SetArea(){
            return $this->Area=($this->Lado*$this->Lado);
        }
    }

    class Circulo extends Figura{
        Var $Raio;
        function __construct($tip,$ape,$rai){
            parent:: __construct($tip,$ape);
            if($rai==""){
                $rai=0;
            }
            $this->Raio=$rai;
        }
        function SetArea(){
            return number_format($this->Area=(3.14*$this->Raio*$this->Raio),2,".",".");
        }

    }

    
    class Trapezio extends Figura{
        var $Base_maior;
        var $Base_menor;
        var $Altura;

        function __construct($tip,$ape,$bmai,$bmen,$alt){
            if($bmai=="" || $bmen=="" || $alt==""){
                $bmai=0;
                $bmen=0;
                $alt=0;
            }
            parent::__construct($tip,$ape);
            $this->Base_maior=$bmai;
            $this->Base_menor=$bmen;
            $this->Altura=$alt;


        }
        function SetArea(){
            
            $altura=$this->Altura;
            $bmm=$this->Base_maior;
            $bmn=$this->Base_menor;
            
            return $this->Area=($altura*(-$bmn+$bmm))/2;
        }
    }
?>