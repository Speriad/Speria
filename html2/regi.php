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
	<title>회원 가입 진행중</title>
</head>
<body>


<?php
	error_reporting(E_ALL^ E_WARNING); 
	include 'connvar.php';

    $getnick = $_POST['nickname'];
    $dbnick = "SELECT * from registration where nickname='{$_POST['nickname']}'";
    $resultnick = mysqli_query($conn, $dbnick);
	$rownick = mysqli_fetch_array($resultnick);

    if($_POST['pw'] !== $_POST['re-pw']){
		echo "<script>alert('다시 입력한 비밀번호가 틀립니다')</script>";
		echo "<meta http-equiv='Refresh' content=\"0; url='regi_show.php'\" />";
	}elseif($_POST['nickname'] == $rownick[1]){
		echo "<script>alert('이미 존재하는 유저네임 입니다')</script>";
		echo "<meta http-equiv='Refresh' content=\"0; url='regi_show.php'\" />";
	}else{
		$success = "INSERT into registration(nickname,pw) values('{$_POST['nickname']}','{$_POST['pw']}')";
        mysqli_query($conn, $success);
        echo "<script>alert('회원가입이 완료되었습니다')</script>";
		echo "<meta http-equiv='Refresh' content=\"0; url='index.php'\" />";
	};
    
	 


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>