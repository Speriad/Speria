<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_php_icon_130266.png" rel="shortcut icon" type="image/x-icon">
	<title>Study</title>
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
 include 'connvar.php';
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







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>