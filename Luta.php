<?php

require_once 'Lutadores.php';


 class Luta{
    private $desafiado;
    private $desafiante;
    
    
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    
    function inicioLuta($nome1,$nome2){
        echo "Senhoras e senhores, apenas um sairá vivo...<br> $nome1 VS $nome2 <br>"
                ." QUE COMECE A LUTA!";
    }
    function lutar($l1, $l2){
        if ($l1 != $l2){
           $venc = rand(0, 2);
            
           switch ($venc){
               case 0: $l1->empatarLuta(); 
                       $l2->empatarLuta();
                       echo "EMPATE!!!";
                break;
            
               case 1: $l1->ganharLuta(); 
                       $l2->perderLuta();
                       echo "O vencedor é {$l1->getNome()})";
                break;
                case 2: $l1->perderLuta(); 
                       $l2->ganharLuta();
                       echo "O vencedor é {$l2->getNome()})";
                break;
           }
           
        } else{
            echo "Os lutadores são os mesmos";
        }
        
    }


}
