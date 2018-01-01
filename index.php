<?php

session_start();

//não pode roubar a sessão, se roubar a sessão o sistema para a execução no ato
//evita um sequestro de sessão
if(empty($_SESSION['dono'])){
    $_SESSION['dono'] = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
    
   $token =  md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
   
   if($_SESSION['dono'] != $token){
       exit;
       
   }
  
}
   echo "Meu sistema etc...";
  print_r($_SESSION);