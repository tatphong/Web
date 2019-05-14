<?php 
session_start();
session_destroy();
header("location:http://localhost:".$_SERVER['SERVER_PORT']."/PRJ_Sem_2.1/");die();
?>