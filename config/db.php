<?php

 $db = new mysqli( "localhost","root","","hedge");
 if($db ->connect_error){
     exit("Cannot connect to the database");
 }


 define('ROOT_URL',"http://localhost/hedge/");


?>
