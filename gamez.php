<?php 
 $query = "insert_into projectg.games (name, rating, thoughts) values '".$_POST["name"]."',".$_POST["rating"].",'".$_POST["thoughts"]."'";

 $connection = mysqli_connect("localhost", "projectg", "dumbledorespants2", "projectg");
 $result = mysqli_query($connection, $query);

 if(!$result){
 	die("could not query, ya strange weirdo ".mysqli_error);
 }
 header('Location: index.php');
 ?>