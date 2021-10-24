<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://i.ibb.co/hKp3HtP/DAMN.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
	 <style>
    body{
      background-color: black;
      color: white;
    }
    </style>
	<title>정보 전송 완료</title>
</head>
<body>


<?php
	error_reporting(E_ALL^ E_WARNING); 
	include 'connvar.php';

	 $getnick = $_POST['nickname'];
	 $dbnick = "SELECT * from registration where nickname='{$_POST['nickname']}'";
	 $resultnick = mysqli_query($conn, $dbnick);
	 $rownick = mysqli_fetch_array($resultnick);

	if($_POST['nickname'] == $rownick[1]){
		if($_POST['pw'] == $rownick[3]){
			echo '로그인 성공<br>';
			$button = "<form action='index.php' method='post'><input type='hidden' name='user' value='{$_POST['nickname']}'><input type='hidden' name='password' value='{$_POST['password']}'><button role='submit' class='btn btn-outline-warning'>무힙갤로 돌아가기</button></form>";
			echo $button;
		}else{
			echo '아이디는 맞지만 비밀번호가 틀렸습니다';
			$button = "<form action='index.php'><button role='submit' class='btn btn-outline-warning'>무힙갤로 돌아가기</button></form>";
			echo $button;
		};
	}else{
		echo '아이디가 틀렸습니다';
		$button = "<form action='index.php'><button role='submit' class='btn btn-outline-warning'>무힙갤로 돌아가기</button></form>";
		echo $button;
		
	};


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>