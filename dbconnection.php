<?php

error_reporting();
    $conn = new mysqli('localhost','root','','hcdatabase');

  if($conn)
    {
        echo ' connection ok';
    }
    else
    { 
        echo'  failed ';
    }  
 ?> 