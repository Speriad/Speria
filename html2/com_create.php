<?php
 include 'connvar.php';
?>
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
$send = "<br><h1 style='text-align: center;'>Create a Post</h1><br>
<form action='com_con.php' method='post'>
<input type='text' class= 'form-control' name = 'title' placeholder='TITLE' required>
<br><br><textarea class= 'form-control' rows='5' name='say' placeholder='Say Something....' required></textarea><input type='hidden' name='nickname' value='{$_POST['nickname']}'><br><br><button role='submit' class='btn btn-outline-warning'>Create a Post</button> 
</form><br>";
echo $send;
?>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>