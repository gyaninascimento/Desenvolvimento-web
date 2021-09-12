<?php
// Interface e implements
include ('interface1.php');

class Teste  implements interface1{

    public function printOnScreen($par){
        echo $par;
    }

}

$teste = new Teste;

$teste->printOnScreen('Olá mundo');

?>