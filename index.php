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
    $connection = mysqli_connect("localhost", "projectg", "dumbledorespants2", "projectg");

    $query = 'select column_name from INFORMATION_SCHEMA.columns where table_name="games" and table_schema="projectg"';
    $headers = mysqli_query($connection, $query);
    if(!$headers){
      die("could not query, ya big dummy ".mysqli_error);
    }

    echo "<tr>";
    while($header = mysql_fetch_array($headers, MYSQLI_NUM)){  
      echo "<th>".$header[0]."</th>";
    }
    echo "</tr>";

    $query = "select * from projectg.games;";

    $results = mysqli_query($connection, $query);
    if(!$results) {
      echo("could not query, ya estupido grande ".mysqli_error());
    }

    while($row = mysqli_fetch_array($results,MYSQLI_BOTH)){
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

<form action="gamez.php" method="post">
  <label for="name">NAME:</label>
  <input type="text" name="name" placeholder="Undertale">
  <label for="rating">RATING:</label>
  <input type="number" name="rating" placeholder="1.0" max="5.0">
  <label for="thoughts">THOUGHTS:</label>
  <input type="text" name="thoughts" placeholder="It was pretty good...">
  <input type="submit">
</form>
</body>
</html>