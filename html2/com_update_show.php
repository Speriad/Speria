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
 $writtendb = "SELECT * from com where id=".$_SESSION['id'];
 $resultwritten = mysqli_query($conn, $writtendb);
 $rowwritten = mysqli_fetch_array($resultwritten);

if($_SESSION['nickname'] == $rowwritten[3]){
    $send = "<br><h1 style='text-align: center;'>Update a Post</h1><br>
<form action='com_update.php' method='post'>
<input type='text' class= 'form-control' name = 'title' placeholder='TITLE TO BE UPDATED' required>
<br><br><textarea class= 'form-control' rows='5' name='say' placeholder='SOMETHING TO SAY TO BE UPDATED' required></textarea><br><br><button role='submit' class='btn btn-warning'>Update a Post</button> 
</form><br>";
echo $send;
    $back = "<br><div><form action='community.php' method='post'><button role='submit' class='btn btn-warning'>Get Back to Community</button></form></div>";
    echo $back;
}elseif(isset($_SESSION['nickname'])){
    echo "<script>alert('Only Writer of this post can remove this post')</script>";
    echo '<meta http-equiv="Refresh" content="0; url=\'community.php\'" />';
    }else{
        echo "<script>alert('Guest Can\'t remove a post')</script>";
        echo '<meta http-equiv="Refresh" content="0; url=\'community.php\'" />';
    };
?>







</body>

</html>