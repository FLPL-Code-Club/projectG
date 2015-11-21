<?php 
 $query = "insert_into projectg.games (name, rating, thoughts) values '".$_POST["name"]."',".$_POST["rating"].",'".$_POST["thoughts"]."'";

 $connection = mysqli_connect("localhost", "projectg", "dumbledorespants2", "projectg");
 mysqli_query($connection, $query);

 header('Location: index.php');
 ?>