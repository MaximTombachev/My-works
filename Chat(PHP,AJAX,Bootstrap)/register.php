<?php 
   $db = "chat2";
   $server = "localhost";
   $user= "root";
   $password = "";

   $connection = mysqli_connect($server,$user,$password,$db);
   if(!connection) die ("Connection error".mysqli_connect_error());
    $user = $_POST['user'];
	$message = $_POST['message'];
    $sql = "INSERT INTO conversation(user,message) VALUES('$user','$message')";

    $result = mysqli_query($connection,$sql);
    
    if($result)
        echo "Registrated message";

?>