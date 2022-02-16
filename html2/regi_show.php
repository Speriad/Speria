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
			<a href='regi_show.php' class='navbar-brand'>회원가입</a>
    </div>
  </nav>

<!-- Showcase 구현 -->

  <section class='bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start'>
    <div class='container'>
      <div class='d-sm-flex align-items-center justify-content-between'>
        <div>
          <h1><span class='text-warning'>여기는 회원가입을 하는곳 입니다</span>
          <p class='lead my-4'>만약 회원가입을 한다면 무힙갤의 더 많은 서비스를 이용할수 있습니다</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter 구현 -->
  <section class='bg-primary text-light p-4'>
    <div class='container'>
    <br><h1 style='text-align: center;'>회원가입</h1><br>
<form action='regi.php' method='post'>
<input type='text' class= 'form-control' name = 'nickname' placeholder='유저네임을 입력해주세요' required>
<br><input type='password' class= 'form-control' name = 'pw' placeholder='비밀번호를 입력해주세요' required>
<br><input type='password' class= 'form-control' name = 're-pw' placeholder='비밀번호를 다시 입력해주세요' required>
<input type='hidden' class= 'form-control' name = 'partner' value='n'>
<br><button role='submit' class='btn btn-outline-warning'>회원가입 요청하기</button> 
</form>
<form action='index.php'>
<button role='submit' class='btn btn-outline-warning'>로그인 화면으로 돌아가기</button>
</form>
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