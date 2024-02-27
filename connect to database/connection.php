<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    <input type="submit">
  </form>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $servername = "localhost";
      $databasename = "test";
      $username = "root";
      $password = "";

      try {
        $connect = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection successful";
      } catch (PDOException) {
        echo "connection failed";
      }
    }
  ?>
</body>
</html>