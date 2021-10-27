<!DOCTYPE html>
<html>
<head>
<?php
include 'connvar.php';
?>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand">댓글</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="content">
        <?php   
        $back = "<form action='com_show.php?id={$_SESSION['id']}' method='post' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>글로 돌아가기</button>
        </form>";
        echo $back;
        ?>
  </div>
  </div>
</nav>
<?php
if(isset($_SESSION['nickname'])){
$idtoupdate = $_SESSION['id'];
$idtoupdate_link = "com_update_show.php";
$idtodelete_link = "com_delete.php";
$filtered_id = mysqli_real_escape_string($conn, $_SESSION['id']);
$sql = "SELECT * FROM com where id={$filtered_id}";
$result = mysqli_query($conn, $sql);
$row2 = mysqli_fetch_array($result);
echo '<h1 style="text-align: center;">'.$row2[1]."<span style='color: gray;'> - ".$row2[3]." 에 의해 작성됨</span></h1>";
echo '<hr>';
echo '<br><h3>'.$row2[2].'</h3>';

echo "<br><br><h3>댓글</h3><hr>";

$form = "<form action='com_re.php' method='post'>
<input type='hidden' name='type' value='r'>
<input type='hidden' name='title' value={$_SESSION['id']}>
<textarea class='form-control' rows='5' name='say' placeholder='댓글을 작성해주세요' required></textarea>
<button role='submit' class='btn btn-warning'>댓글 달기</button>
</form>";

echo $form;
};
?>
<ul style='text-align: center;'>
<?php
$sqlcomment = "SELECT * FROM com where type='r'";
$resultcomment = mysqli_query($conn, $sqlcomment);

while($rowcomment = mysqli_fetch_array($resultcomment)){
	  echo "<a>{$rowcomment[2]}<span style='color: gray;'> - {$rowcomment[3]} 에 의해 작성됨</span></a><br><hr>";
    };























?>
</ul>
</body>
</html>