<!DOCTYPE html>
<html>
<head>
  <title>Hello</title>
</head>
<body>
  <h1>Hello</h1>

  <?php 

    $loggedIn = true;

      if ($loggedIn == true) {
        echo "You are now logged in.";
      } else {
        echo "Please Log in..";
      }

      $people = ["Alice", "Bob", "Catherine"]; 

      print_r($people);
      echo $people[2];

      foreach ($people as $person) {
          echo $person . ' ';

      $numbers = [5, 3, 7];

      $sum = 0;

      foreach ($numbers as $number) {
        $sum = $sum + $number;
      }
      echo $sum;
      }
  ?>



  <form action="process.php" method="post">
    Enter your name: <input name="name" type="text">
    <input type="submit">
  </form>

</body>
</html>