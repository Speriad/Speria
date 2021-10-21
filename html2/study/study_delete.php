<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_php_icon_130266.png" rel="shortcut icon" type="image/x-icon">
	<title>MySQL</title>
  <style>
    body{
      background-color: black;
      color: white;
    }
    a{
      color: yellow;
    }
  </style>
</head>
<body>

<br>
<?php
//해당 id에 포함되는 각 컬럼의 값들을 보여줌
include 'connvar.php';

$getpw = $_POST['pw'];
$getpwfromdb = "SELECT pw from registration where id=".$_GET['id'];

if($getpw = $getpwfromdb){
  $deletefromdb = "DELETE from registration where id=".$_GET['id'];
  mysqli_query($conn,$deletefromdb);
};



//study_delete_show.php 만들고 패스워드 입력칸 추가후 여기에 맞는지 아닌지 확인
























?>
<meta http-equiv="Refresh" content="0; url='study.php'" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>