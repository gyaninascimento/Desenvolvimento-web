<?php
/*
SESSÃO: quando armazenamos um valor em uma variável de uma sessão e mesmo que o usuario feche a aba do navegador, quando for voltar essa variavl ainda estará lá guardada, e só será distruida quando o usuário fecha o navegador. 
COOKIES: quando criamos uma variável que podemos dizer quanto tempo pode ficar armazenado no pc da pessoa, mesmo depois do navegador fechado. 

SESSÕES
    session_start();
    $_SESSION['nome'] = 'Gyani';
*/

//COOKIES

session_start();
setcookie('nome', 'gyani', time()+ (60*60*24),'/');
echo $_COOKIE['nome'];// para destruir os cookies colocar valor negativo no tempo

?>