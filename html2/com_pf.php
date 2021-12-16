<!DOCTYPE html>
<html>
<?php 
include 'connvar.php';
$update = "UPDATE registration set nickname='{$_POST['new_nickname']}' , pw='{$_POST['new_pw']}' where nickname='{$_SESSION['nickname']}'";
$update2 = "UPDATE com set written='{$_POST['new_nickname']}' where written='{$_SESSION['nickname']}'"
mysqli_query($conn, $update);
mysqli_query($conn, $update2);
$_SESSION['nickname'] = null;
echo "<script>alert('다시 로그인해주세요')</script>";
?>
<meta http-equiv="Refresh" content="0; url='community.php'" />
</html>