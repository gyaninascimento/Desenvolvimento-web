<?php
    session_start();
    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
    }
    
?>