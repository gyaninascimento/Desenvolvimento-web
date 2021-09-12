<?php

class Pessoa{
    //objeto pessoa
    private $nome = 'Gyani';
    private $idade = '33';
    private $peso = '80kg';

    public function crescer(){
        $this->comer();
        echo '<br> estou crescendo';
    }

   private function comer(){
    echo 'estou comendo';

   } 
}

//tudo faz referencia a classe pessoa, com o private estão acessiveis apenas a nossa classe, 
// para chamar a classe temos que instanciar, ou seja, eu preciso criar esse objeto novo  toda vez que for usa-lo
//PRIVATE FICA DISPONIVEL APENAS DENTRO DA CLASSE

//INSTANCIAR
$pessoa = new Pessoa;
$pessoa2 = new Pessoa;

//para chamar método ou função
$pessoa->crescer();

//Public, private e static

?>