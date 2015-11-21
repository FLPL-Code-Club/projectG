<?php 
 $query = "insert_into projectg.games (name, rating, thoughts) values '".$_POST["name"]."',".$_POST["rating"].",'".$_POST["thoughts"]."'";
 echo $query;
 ?>