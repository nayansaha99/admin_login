<?php 

$conn = new mysqli('localhost','root','test','usersform');
if(!$conn.mysqli_connect_error())
{
    echo "Connection Denied";
}


?>