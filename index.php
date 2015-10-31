<!DOCTYPE html>
<html>
<head>
  <title>Project G</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script type="text/javascript" src="js/gamez.js"></script>
</head>
<body>
<h1>Project G</h1>
<table id="game-list">
  <?php 
    $query = "select * from projectg.games;";

    $connection = mysqli_connect("localhost", "projectg", "dumbledorespants2", "projectg");
    $results = mysqli_query($connection, $query);
    $arr_result =  mysqli_fetch_array($results,MYSQLI_BOTH); 
    if(!$results) {
      die("could not query ".mysqli_error());
    }

    foreach($arr_result as $row) {
      echo "<tr>";
      echo "<td>".$row["id"]."</td>";
      echo "<td>".$row["name"]."</td>";
      echo "<td>".$row["rating"]."</td>";
      echo "<td>".$row["thoughts"]."</td>";
      echo "</tr>";
    }
    mysqli_close($connection);
  ?>
</table>
</body>
</html>