<?php 
   $db = "chat2";
   $server = "localhost";
   $user= "root";
   $password = "";

   $connection = @mysqli_connect($server,$user,$password,$db);
   if(!connection) die ("Connection error".mysqli_connect_error());
   $sql = "SELECT user,message FROM conversation order by idConversation asc;";
   $result = mysqli_query($connection,$sql);

    while($data = mysqli_fetch_assoc($result))
    echo "<p><b>".$data["user"]."</b> write:".$data["message"]."</p>";
?>