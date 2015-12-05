<?php 
 $query = "DELETE FROM projectg,games WHERE id = ".$_POST['id'];

 $connection = mysqli_connect("localhost", "projectg", "dumbledorespants2", "projectg");
 $result = mysqli_query($connection, $query);

 if(!$result){
 	die("could not query, ya strange weirdo ".mysqli_error());
 }
 header('Location: index.php');
 ?>