<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='employee';
$mysqli= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($mysqli->connect_errno)
{
    echo "Connection Failed";
  
}
  else{
        echo "Connection Successfull";
    }
//$mysqli-->close();
?>