<?php

error_reporting();
    $conn = new mysqli('localhost','root','','signup');

  if($conn)
    {
        echo ' connection ok';
    }
    else
    { 
        echo'  failed ';
    }  
 ?> 