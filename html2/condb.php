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
	<title>정보 전송 완료</title>
</head>
<body>


<?php

	 $getnick = $_POST['nickname'];
	 $dbnick = "SELECT * from registration where nickname='{$_POST['nickname']}'";
	 $resultnick = mysqli_query($conn, $dbnick);
	 $rownick = mysqli_fetch_array($resultnick);

	if($_POST['nickname'] == $rownick[1]){
		if($_POST['pw'] == $rownick[2]){
			$_SESSION['nickname'] = $_POST['nickname'];
			echo "<script>alert('로그인에 성공했습니다')</script>";
		}else{
			echo "<script>alert('존재하지 않는 계정입니다')</script>";
		};
	}else{
		echo "<script>alert('존재하지 않는 계정입니다')</script>";
		
	};


?>
<meta http-equiv="Refresh" content="0; url='index.php'" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>