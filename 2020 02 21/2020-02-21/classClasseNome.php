<?php
    class NomeClasse{
        private $atributo1;
        private $atributo2;
        private $atributo3;

        public function __construct($a1, $a2, $a3){
            $this->set_atributo1($a1);
            $this->set_atributo2($a2);
            $this->set_atributo3($a3);
        }

        private function set_atributo1($valor){
            $this->atributo1 = $valor;
        }

        private function set_atributo2($valor){
            $this->atributo2 = $valor;
        }

        private function set_atributo3($valor){
            $this->atributo3 = $valor;
        }

        private function get_atributo1($valor){
            return($this->atributo1); 
        }

        private function get_atributo2($valor){
            return($this->atributo2);
        }


        private function get_atributo3($valor){
            return($this->atributo3);
        }
    }
?>