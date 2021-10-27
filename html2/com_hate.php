<?php
include 'connvar.php';
if(isset($_SESSION['nickname'])){
$morehate = "UPDATE com SET hate=hate+1 where id={$_SESSION['id']}";
mysqli_query($conn, $morehate);
echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";

}else{
    echo "<script>alert('로그인 후 이용 가능합니다')</script>";
    echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
};
?>

