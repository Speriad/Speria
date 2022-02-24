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
    $button = "<br><br><form action='upload-image.php' method='post' enctype='multipart/form-data'>
    <input class='form-control' type='file' name='userfile'>
    <br><button class='btn btn-primary' role='submit' name='submit'>SUBMIT</button></form>";
    echo $button;
    ?>
</body>
</html>