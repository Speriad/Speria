<?php
include 'connvar.php';
if($_SESSION['nickname'] == $_POST['nickname']){
$delete = "DELETE from registration where nickname='{$_SESSION['nickname']}'";
$delete2 = "DELETE from com where written='{$_SESSION['nickname']}'";
mysqli_query($conn , $delete);
mysqli_query($conn , $delete2);
$_SESSION['nickname'] = null;
}else{
    echo "<script>alert('유저네임이 일치하지않아 계정을 삭제하지 못했습니다.')</script>";
};
?>

<meta http-equiv="Refresh" content="0; url='index.php'" />