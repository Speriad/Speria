<!DOCTYPE html>
<html>
<head>
<?php include 'connvar.php'; ?>
    <style>
    body{
      background-color: black;
      color: white;
    }
    </style>
</head>
<body>


<?php

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
		$success = "INSERT into registration(nickname, pw, partner) values('{$_POST['nickname']}','{$_POST['pw']}','n')";
        mysqli_query($conn, $success);
        echo "<script>alert('회원가입이 완료되었습니다')</script>";
		echo "<meta http-equiv='Refresh' content=\"0; url='index.php'\" />";
	};
    
	 


?>
</body>
</html>