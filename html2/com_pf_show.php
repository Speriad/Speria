<!doctype html>

<head>
<?php include 'connvar.php'; ?>
	<style type='text/css'>
		body {
			background-color: white;
		}
    a{
      text-decoration: none;
      color:white;
    }
	</style>
</head>

<body>
	<!-- NAVBAR 구현 -->
	<nav class='navbar navbar-expand-lg bg-dark navbar-dark py-3'>
		<div class='container'>
			<a href='regi_show.php' class='navbar-brand'>정보 수정</a>
    </div>
  </nav>

<!-- Showcase 구현 -->

  <section class='bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start'>
    <div class='container'>
      <div class='d-sm-flex align-items-center justify-content-between'>
        <div>
          <h1><span class='text-warning'>여기는 정보를 수정하는 곳 입니다</span>
          <p class='lead my-4'>정보를 수정하기 위해 먼저 비밀번호 인증이 필요합니다</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter 구현 -->
  <section class='bg-primary text-light p-4'>
    <div class='container'>
    <br><h1 style='text-align: center;'>정보 변경</h1><br>
    <?php

$sql = "SELECT * FROM registration where nickname='{$_SESSION['nickname']}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$send = "
<form action='com_pf_show.php' method='post'>
<input type='password' class= 'form-control' name = 'pw' placeholder='본인임을 확인하기위해 비밀번호를 입력해주세요' required>
<br><br><button role='submit' name='check_pw' class='btn btn-warning'>비밀번호 확인하기</button> 
</form><br><br><div><form action='index.php' method='post'><button role='submit' class='btn btn-warning'>로비로 돌아가기</button></form></div>";
$send2 = "
<form action='com_pf.php' method='post'>
<input type='text' name='new_nickname' class='form-control' placeholder='변경 하고 싶은 닉네임을 입력해주세요' required>
<br><input type='password' name='new_pw' class='form-control' placeholder='변경 하고 싶은 비밀번호를 입력해주세요' required>
<br><br><button role='submit' name='update' class='btn btn-warning'>정보 수정하기</button> 
<button role='submit' name='remove' class='btn btn-danger'>계정 삭제하기</button> 
</form><br><br><form action='com_create.php' method='post'><button role='submit' class='btn btn-success' name='partner'>파트너쉽 신청하기</button></form>
<br><br><div><form action='index.php' method='post'><button role='submit' class='btn btn-warning'>로비로 돌아가기</button></form></div>";
$sendpartner = "
<form action='com_pf.php' method='post'>
<input type='text' name='new_nickname' class='form-control' placeholder='변경 하고 싶은 닉네임을 입력해주세요' required>
<br><input type='password' name='new_pw' class='form-control' placeholder='변경 하고 싶은 비밀번호를 입력해주세요' required>
<br><br><button role='submit' name='update' class='btn btn-warning'>정보 수정하기</button> 
<button role='submit' name='remove' class='btn btn-danger'>계정 삭제하기</button> 
</form><br><br><div><form action='index.php' method='post'><button role='submit' class='btn btn-warning'>로비로 돌아가기</button></form></div>";

if(isset($_POST['check_pw'])){
    if($row['pw'] == $_POST['pw']){
        if($row[3] == 'y'){
          echo $send3;
        }else{
          echo $send2;
        };
    }else{
        echo "<script>alert('비밀번호가 틀렸습니다')</script>";
        echo $send;
    };
}else{
    echo $send;
};
#비밀번호를 입력했는가, 입력한 비밀번호가 맞는가, 파트너쉽이 있는가
?>
    </div>
  </section>
  <section>
  <div class='alert alert-warning alert-dismissible fade show' role='alert'>
  모든 유저의 정보는 안전하게 저장됩니다.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>
  </section>

    
    
  



  









</body>

</html>