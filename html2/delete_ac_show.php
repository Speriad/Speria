<!doctype html>
<html>
<head>
    <?php include 'connvar.php'; ?>
</head>
<body>
    <?php
$send = "<br><h1 style='text-align: center;'>계정 삭제</h1><br>
<form action='delete_ac.php' method='post'>
<input type='text' class= 'form-control' name = 'nickname' placeholder='삭제를 확인하기위해 이름을 입력해주세요' required>
<br><br><button role='submit' class='btn btn-warning'>계정 삭제</button> 
</form><br><br><div><form action='community.php' method='post'><button role='submit' class='btn btn-warning'>커뮤니티로 돌아가기</button></form></div>"
echo $send;
?>
</body>
</html>