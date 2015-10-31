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
    $query = "select * from projectg. games;";

    $connection = mysql_connect("localhost", "projectg", "dumbledorespants2", "projectg");
    $results = mysql_query($connection, $query);
    if(!$results) {
      die("could not query".mysql_error());
    }

    echo mysql_result($results);
  ?>
</table>
</body>
</html>