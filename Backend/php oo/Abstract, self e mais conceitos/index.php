<?php
/*ABSTRACT serve apenas para ser herdada, mas não instanciada
abstract class teste{
    public function func1(){
        echo 'chamando função 1 <br>';
    }
    abstract function func2();     
}
class Principal extends teste{
    public function func2(){
        echo 'estou declarando oficialmete um método abstrato';
    }

}

$principal = new Principal;

$principal->func1();
$principal->func2();*/

//STATIC

abstract class teste{
    public function func1(){
        echo 'chamando função 1 <br>';
    }
    abstract function func2();     
}
class Principal extends teste{
    public function func2(){
        echo 'estou declarando oficialmete um método abstrato';

    }

    public static function metodoestatico(){
        echo 'Método estático';
    }

        public function funcao(){
           // Principal::metodoestatico();
           self::metodoestatico();

        }
    }

$principal = new Principal;

Principal::metodoestatico();

?>