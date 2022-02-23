<!doctype html>

<head>
<?php include 'connvar.php'; ?>
  <style>
    body{
      background-color: white;
      color: black;
    }
    a{
      color: yellow;
    }
  </style>
  <title>TEST</title>
</head>
<body>
    <?php
    $button = "<form action='#' method='post'><input class='form-control' type='image' name='image'><button class='btn btn-primary' role='submit' name='submit'>SUBMIT</button></form>";
    echo $button;

    if($_POST['submit']){

    };

    $sql = "SELECT * from image";
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_array($result)){
        echo "<img src='{$row}'>";
    };
    ?>
</body>
</html>