<?php

session_start();
if(!empty( $_SESSION['nome'])){ 
    //echo "não tem sessão";
    echo "if"; 
}else {
    //include_once('PHP/header.php');
    var_dump(isset($_SESSION['nome']));
    echo "else"; 
}

