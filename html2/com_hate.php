<?php
include 'connvar.php';
if (isset($_SESSION['nickname'])) {
    $checkifalready = "SELECT * from likebutton where postid={$_SESSION['id']}";
    $checkifalreadyquery = mysqli_query($conn, $checkifalready);
    $checkifalreadyrow = mysqli_fetch_array($checkifalreadyquery);
    if (isset($checkifalreadyrow)) {
        echo "<script>alert('이미 좋아요 또는 싫어요를 누른 게시물입니다.')</script>";
        echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
    } else {
        $morehate = "UPDATE com SET hate=hate+1 where id={$_SESSION['id']}";
        mysqli_query($conn, $morehate);
        $sql = "SELECT * from com where id={$_SESSION['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $addtolikelist = "INSERT into likebutton (nickname, postid, type, title, written) VALUES ('{$_SESSION['nickname']}', {$_SESSION['id']}, 'hate', '{$row[1]}', '{$row[3]}')";
        mysqli_query($conn, $addtolikelist);
        echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
    }
} else {
    echo "<script>alert('로그인 후 이용 가능합니다')</script>";
    echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
};
