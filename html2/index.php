<!doctype html>

<head>
  <?php
  include 'connvar.php';

  if (isset($_SESSION['nickname'])) {
    $sql2 = "SELECT * from registration where nickname = '{$_SESSION['nickname']}'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
  }

  if (isset($_POST['logout'])) {
    $_SESSION['nickname'] = null;
  };
  ?>
  <style type='text/css'>
    body {
      background-color: white;
    }

    a {
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

  <section class='bg-dark text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-center'>
    <div class='container'>
      <div class='d-sm-flex align-items-center justify-content-center'>
        <div>

          <div class="row mb-3">

            <div id="carouselExampleCaptions" class="carousel slide w-70" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href='https://www.youtube.com/channel/UCqf-kTp9ERV5T1rPayno7LA' target='_blank'>
                    <img src="https://i.guim.co.uk/img/media/54d9f7ef0a866d9ef9d7698c396722195d1c9e38/1398_1896_3515_2107/master/3515.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=2047c5afc892048e845dccc29c2b5a09" class="d-inline w-50" alt="..."></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h4>오늘의 아티스트</h4>
                    <h5>Frank Ocean</h5>
                    <p>프랭크 오션은 어클레임드 뮤직 선정 2010년대 최고의 아티스트 3위에 오르기도 했습니다.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <a href='https://www.youtube.com/playlist?list=OLAK5uy_mRFuqe0IIrexXkU7JOxo4rOb0WLEcwuz8' target='_blank'>
                    <img src="https://image.aladin.co.kr/product/818/77/cover500/8678246847_1.jpg" class="d-inline" alt="..."></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h4>오늘의 앨범</h4>
                    <h5>My Beautiful Dark Twisted Fantasy</h5>
                    <p>Kanye West 의 최고 명반이자, 힙합의 역사에서 가장 중요한 앨범 중 하나.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <a href='https://www.youtube.com/watch?v=wrxxfrzJY6k' target='_blank'>
                    <img src="https://media.pitchfork.com/photos/5929ad7ac0084474cd0c1720/1:1/w_600/6283beab.jpg" class="d-inline" alt="..."></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h4>오늘의 곡</h4>
                    <h5>Off Top</h5>
                    <p>하드코어 익스페리멘탈 힙합의 정석 같은 곡.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">이전</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">다음</span>
              </button>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter 구현 -->
  <section class='bg-secondary text-light p-4'>
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

      if (isset($_SESSION['nickname']) and $row2[3] == 'y') {
        $partnerlogin = "<br><h1 style='text-align: center;'>Welcome! {$_SESSION['nickname']}</h1><br><div style='text-align: center;'>
    당신은 무힙갤의 파트너쉽 유저입니다.</div><br><div class='text-center'><div class='container mt-3'>
    <div class='btn-group btn-group-lg'><form action='index.php' method='post'><button role='submit' name='logout' class='btn btn-outline-warning'>로그 아웃</form></button>
    <form action='com_pf_show.php'><button role='submit' class='btn btn-outline-warning'>정보 수정</button></div></div></div>";
        echo $partnerlogin;
      } elseif (isset($_SESSION['nickname'])) {
        $belogin = "<br><h1 style='text-align: center;'>Welcome! {$_SESSION['nickname']}</h1><br><div style='text-align: center;'>
    You are now about to witness the strength of street knowledge.</div><br><div class='text-center'><div class='container mt-3'>
    <div class='btn-group btn-group-lg'><form action='index.php' method='post'><button role='submit' name='logout' class='btn btn-outline-warning'>로그 아웃</form></button>
    <form action='com_pf_show.php'><button role='submit' class='btn btn-outline-warning'>정보 수정</button></div></div></div>";
        echo $belogin;
      } elseif ($row2[1] = null) {
        echo $notlogin;
      } else {
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
            <button class="accordion-button btn-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              질문 1
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>대답 1</strong><br><br>설명 1
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button btn-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              질문 2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>대답 2</strong><br><br>설명 2
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button btn-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              질문 3
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>대답 3</strong><br><br>설명 3
            </div>
          </div>
        </div>
      </div>
      <div class="accordion" id="questions">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button btn-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              질문 4
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>대답 4</strong><br><br>질문 넣은거 디자인 때문임
            </div>
          </div>
        </div>
      </div>
  </section>


















</body>

</html>