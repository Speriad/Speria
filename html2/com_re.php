<?php
include 'connvar.php';
if(isset($_SESSION['nickname'])){
    $puttodb = "INSERT into com(title,say,type,written) VALUES ('{$_POST['title']}' , '{$_POST['say']}' , '{$_POST['type']}' , '{$_SESSION['nickname']}')";
    mysqli_query($conn, $puttodb);
    echo "<script>alert('성공적으로 작성되었습니다')</script>";
    echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
}else{
    echo "<script>alert('로그인 후 댓글을 작성할수 있습니다')</script>";
    echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
  };
?>