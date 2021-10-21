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

<?php
include 'connvar.php';

$idtodelete = $_GET['id'];
$idtodelete_link = "study_delete.php?id=".$idtodelete;

$lessgo = "<br><h1 style='text-align: center;'>비밀번호 입력 (비밀번호가 틀리면 삭제되지 않습니다)</h1><br>
<form action=".$idtodelete_link." method='post'>
<br><br><input type='pw' class= 'form-control' name = 'password' placeholder='비밀번호 (삭제 또는 수정 할때 필요함)' required>
<br><br><button role='submit' class='btn btn-outline-warning'>삭제 하기</button> 
</form><br>";

echo $lessgo;






















?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>