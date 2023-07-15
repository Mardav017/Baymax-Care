<?php

error_reporting();
    $conn = new mysqli('localhost','root','','signup');
    
session_start();


  if($conn)
    {
        echo 'connection ok!!';
       
    }
    else
    { 
        echo'  failed ';
    }  
 ?> 