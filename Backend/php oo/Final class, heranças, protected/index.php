<?php
//HERANÇAS E CLASSES FINAIS
//final class Filha{// o final não deixa que a classe sej herdada. 
    //public function mostrarOla(){
        class Filha{
            public function mostrarOla(){
                echo 'Olá mundo!';
            }
        
        }


class Pai extends Filha{

    public function mostrarTchau(){
        echo 'Tchau mundo!<br>';
    }
}

//$pai = new Pai;

//$pai->mostrarTchau();

$pai = new Pai;
$pai->mostrarOla();

//$filha->mostrarOla();
// herdar herança nada mais é do que agente usar extends para classe 'x', mas quando tem FINAL, inpede que a classe seja herdada

//PROTECTED , POSSO CHAMAR O PROCTED NA PROPRIA CLASSE OU NA CLASSE PAI, AO CONTRARIO DA PRIVATE, QUE ESTA DISPONIVEL APENAS NA PROPRIA CLASSE.


?>