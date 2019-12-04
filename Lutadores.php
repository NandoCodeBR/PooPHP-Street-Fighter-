<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Lutador{
            private $nome;
            private $idade;
            private $nacionalidade;
            private $vitorias;
            private $derrotas;
            private $empates;
            
            
            
            
            public function lutar(){
            
                
            }

            
            
            
            
            
            
            //Métodos getter e setter
            public function getNome(){
                return $this->nome;
            }
            public function setNome($n){
                $this->nome = $n;
        }
            public function getIdade(){
                return $this->idade;
            }
            public function setIdade($i){
                $this->idade = $i;
        }
            public function getNacionalidade(){
                return $this->nacionalidade;
            }
            public function setNacionalidade($nac){
                $this->nacionalidade = $nac;
        }
            public function getVitorias(){
                return $this->vitorias;
            }
            public function setVitorias($v){
                $this->vitorias = $v;
        }
            public function getDerrotas(){
                return $this->derrotas;
            }
            public function setDerrotas($d){
                $this->derrotas = $d;
        }
            public function getEmpates(){
                return $this->empates;
            }
            public function setEmpates($e){
                $this->empates = $e;
        }
            public function apresentacao($obj){
            echo "Ele vem de {$obj->getNacionalidade()}, tem {$obj->getIdade()} anos, "
            . "vem com uma série de {$obj->getVitorias()} vitórias, {$obj->getDerrotas()} derrotas e {$obj->getEmpates()} empates ."
            . " O nome do lutador éééééé... {$obj->getNome()} !!!!!!";
                
            }
            public function __construct($no, $ida, $na) {
                $this->setNome($no);
                $this->setIdade($ida);
                $this->setNacionalidade($na);
                $this->derrotas = 0;
                $this->empates = 0;
                $this->vitorias = 0;
            }
        }
        
        

        ?>
    </body>
</html>
