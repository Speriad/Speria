<!doctype html>

<head>
  <?php 
    include 'connvar.php'; 

    if(isset($_SESSION['nickname'])){
      $sql2 = "SELECT * from registration where nickname = '{$_SESSION['nickname']}'";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_array($result2);
    }

    if(isset($_POST['logout'])){
      $_SESSION['nickname'] = null;
    };
  ?>
	<style type='text/css'>
		body {
			background-color: white;
		}
    a{
      text-decoration: none;
    }
	</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand">로비</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="content">   
      <?php
        $button1 = "<form action='community.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>Community</button>
        </form>";
        $button2 = "<form action='typebeat.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>Type Beat</button>
        </form>";
        $button5 = "<form action='news.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>News</button>
        </form>";
        echo $button1;
        echo $button2;
        echo $button5;
      ?>
  </div>
  </div>
</nav>


<!-- Showcase 구현 -->

  <section class='bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start'>
    <div class='container'>
      <div class='d-sm-flex align-items-center justify-content-between'>
        <div>
          <h1><span class='text-warning'>프랭크 오션</span>의<span class='text-warning'> 'Blonde'</span> 는 최고입니다.</h1>
          <p class='lead my-4'>피치포크 선정 2010년대 최고의 앨범인, 'Blonde' 가 너무 마음에 듭니다.</p>
          <a class="btn btn-danger btn-lg" href="https://www.youtube.com/playlist?list=PLzoqV_VvWIwGzYTcm3r1JwqgQOBXTvKyd" role="button">유튜브에서 감상하기</a>
          <p class='lead my-3' style='color: grey;'>2022/02/16 업데이트 됨</p>
        </div>
        <a href='https://www.youtube.com/playlist?list=PLzoqV_VvWIwGzYTcm3r1JwqgQOBXTvKyd'><img class='img-fluid d-none d-sm-block' src='https://lh3.googleusercontent.com/TWBi2M7D8gIwoo3NmhGfoVKI-PuzDunLVYpmLCbeP8Uw2YWpnjttlxmVvpVaO8uSjmLPjHgy6iGXxlPF=w544-h544-l90-rj' alt='' /></a>
      </div>
    </div>
  </section>

  <!-- Newsletter 구현 -->
  <section class='bg-primary text-light p-4'>
    <div class='container'>
    <?php

    $notlogin = "<br><h1 style='text-align: center;'>로그인</h1><br>
<form action='condb.php' method='post'>
<input type='text' class= 'form-control' name = 'nickname' placeholder='유저네임' required>
<br><input type='password' class= 'form-control' name = 'pw' placeholder='비밀번호' required>
<br><button role='submit' class='btn btn-outline-warning'>로그인</button> 
</form>
<form action=regi_show.php method='post'>
<button role='submit' class='btn btn-outline-warning'>회원가입</button>
  </form>
    </div>
  </section>
  <section>
  <div class='alert alert-warning alert-dismissible fade show' role='alert'>
  모든 유저의 정보는 안전하게 저장됩니다.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";

    if(isset($_SESSION['nickname']) and $row2[3] == 'y'){
      $partnerlogin = "<br><h1 style='text-align: center;'>Welcome! {$_SESSION['nickname']}</h1><br><div style='text-align: center;'>
    당신은 무힙갤의 파트너쉽 유저입니다.</div><br><div class='text-center'><div class='container mt-3'>
    <div class='btn-group btn-group-lg'><form action='index.php' method='post'><button role='submit' name='logout' class='btn btn-outline-warning'>로그 아웃</form></button>
    <form action='com_pf_show.php'><button role='submit' class='btn btn-outline-warning'>정보 수정</button></div></div></div>";
      echo $partnerlogin;
    }elseif(isset($_SESSION['nickname'])){
      $belogin = "<br><h1 style='text-align: center;'>Welcome! {$_SESSION['nickname']}</h1><br><div style='text-align: center;'>
    You are now about to witness the strength of street knowledge.</div><br><div class='text-center'><div class='container mt-3'>
    <div class='btn-group btn-group-lg'><form action='index.php' method='post'><button role='submit' name='logout' class='btn btn-outline-warning'>로그 아웃</form></button>
    <form action='com_pf_show.php'><button role='submit' class='btn btn-outline-warning'>정보 수정</button></div></div></div>";
      echo $belogin;
    }elseif($row2[1] = null){
      echo $notlogin; 
    }else{
      echo $notlogin;
    };
  ?>
  </div>
  </section>

  <!-- Making BOXES -->

  <section class='p-5'>
    <div class='container'>
      <div class='row text-center g-4'>
        <div class='col-md'>
          <div class='card bg-secondary text-light'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-chat-fill"></i>
            </div>
            <h3 class='card-title'>
              커뮤니티
            </h3>
            <p class='card-text'>
              가장 직관적인 힙합 커뮤니티
            </p>
            <a href='#crm' class='btn btn-outline-warning'>더 알아보기</a>
            </div>
          </div>
        </div>
        <div class='col-md'>
          <div class='card bg-dark text-light'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-file-earmark-music-fill"></i>
            </div>
            <h3 class='card-title'>
              타입 비트
            </h3>
            <p class='card-text'>
              무료로 타입비트를 공유해보세요
            </p>
            <a href='#trm' class='btn btn-outline-warning'>더 알아보기</a>
            </div>
          </div>
        </div>
        <div class='col-md'>
          <div class='card bg-secondary text-light'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-justify-left"></i>
            </div>
            <h3 class='card-title'>
              뉴스
            </h3>
            <p class='card-text'>
              외국힙합 뉴스를 누구보다 빠르게 접해보세요
            </p>
            <a href='#lrm' class='btn btn-outline-warning'>더 알아보기</a>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <!-- Other Sections -->

  <section id='crm' class='p-5 bg-white'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
      <div class='col-md'>
          <img src='https://cityofgood.sg/wp-content/uploads/2020/11/Success-3-2048x816.jpg' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5'>
          <h2>당신과 같이 힙합을 좋아하는 사람들과 모이세요!</h2>
          <p class='lead'>
            같은 취향의 친구들과 서로 좋아하는 곡과 앨범 또는 아티스트를 공유하세요. 그들과 함께
            곡을 공유하며 당신의 숨겨진 취향의 곡 또는 아티스트를 발견할 수도 있습니다.
          </p>
          <p class='lead'>
            힙합팬을 위한 커뮤니티 당신의 곡을 공유해보기도 하세요!
          </p>
          <a href='community.php' class='btn btn-dark mt-3'>
            <i class='bi bi-chevron-right'>커뮤니티로 들어가기</i>
          </a>
        </div>
      </div>
  </section>

  <section id='trm' class='p-5 bg-black'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
        <div class='col-md'>
          <img src='https://i.pinimg.com/originals/7e/3b/50/7e3b5074bfb8f14f0d68d6851b56447b.jpg' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5 text-white'>
          <h2>당신의 음악과 맞는 타입 비트를 얻어보세요!</h2>
          <p class='lead text-white'>
            여러 사람들과 당신의 타입 비트를 공유해보기도 하고, 당신이 찾는 타입 비트를 바로 얻어보세요!
            생각보다 무힙갤에 빨리 빠질겁니다.
          </p>
          <p class='lead text-white'>
            초보자를 위한 타입비트도 바로 얻을수 있습니다
          </p>
          <a href='typebeat.php' class='btn btn-light mt-3'>
            <i class='bi bi-chevron-right'>타입 비트로 들어가기</i>
          </a>
        </div>
      </div>
  </section>

  <section id='lrm' class='p-5 bg-white'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
        <div class='col-md'>
          <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_B_fuU2qhoWCCgblAuozsKAdVZashFLfbinvp1GuZ-j9gGR2xY9NXDPHM1l7vfPQygjc&usqp=CAU' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5 text-black'>
          <h2>최신 외국힙합에 관한 소식을 접해보세요!</h2>
          <p class='lead text-black'>
           외국 힙합에 관한 소식을 가장 빨리 접해보세요!
          </p>
          <p class='lead text-black'>
            매일 매일 업데이트 됩니다.
          </p>
          <a href='news.php' class='btn btn-dark mt-3'>
            <i class='bi bi-chevron-right'>뉴스로 들어가기</i>
          </a>
        </div>
      </div>
  </section>

  <!-- Question Accordian -->

  <section id='questions' class='p-5'>
    <div class='container'>
      <h2 class='text-center mb-4'>자주 물어보는 질문</h2>
      <div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button btn-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        커뮤니티에 글은 어떻게 쓰나요?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>로그인이 필요합니다</strong><br><br>로그인을 한 후 커뮤니티로 들어가 글쓰기 기능을 이용하면 됩니다
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button btn-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        타입비트를 사용하려면 돈을 내야하나요?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>사용하는데 돈이 들지 않습니다</strong><br><br>무힙갤에 올리는 모든 비트는 무료 비트로 제공해야 하고 비트를 사용하는 사람은 무료로 사용할 수 있습니다
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button btn-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        무힙갤에 정보 수정 기능이 있나요?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>로비 페이지에서 정보를 수정할 수 있습니다</strong><br><br>닉네임과 비밀번호를 수정할수 있으며 곧 이메일과 자세한 회원정보를 추가할 것 입니다
      </div>
    </div>
  </div>
</div>
<div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button btn-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      뉴스 에서는 뭘 볼수 있나요?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>외국 힙합과 관련된 내용을 볼수 있습니다</strong><br><br>무힙갤에서 외국 힙합의 최신소식을 접해보세요
      </div>
    </div>
  </div>
    </div>
  </section>

    
    
  



  










</body>

</html>