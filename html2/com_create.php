<?php
 include 'connvar.php';
?>
<!doctype html>

<head>
<?php include 'connvar.php'; ?>
  <style>
    ul{
   list-style:none;
      }  
    body{
      background-color: white;
      color: black;
    }
    a{
      color: yellow;
      text-decoration: none;
    }
    hr{
      margin: 7px;
    }
  </style>
</head>
<body>


<?php
$send = "<br><h1 style='text-align: center;'>Create a Post</h1><br>
<form action='com_con.php' method='post'>
<input type='text' class= 'form-control' name = 'title' placeholder='TITLE' required>
<br><br><textarea class= 'form-control' rows='5' name='say' placeholder='Say Something....' required></textarea><br><br><button role='submit' class='btn btn-warning'>Create a Post</button> 
</form><br><br><div><form action='community.php' method='post'><button role='submit' class='btn btn-warning'>Get Back to Community</button></form></div>";
echo $send;
?>








</body>

</html>