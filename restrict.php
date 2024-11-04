<?php 
session_start();


if(isset($_SESSION['logined']) && $_SESSION['logined'] == true){  
    echo 'You are logined';
}else{
    echo 'You are not logined';
}