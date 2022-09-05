<!doctype html>

<head>
  <?php include 'connvar.php'; ?>
  <style type='text/css'>
    body {
      background-color: white;
    }

    a {
      text-decoration: none;
      color: white;
    }
  </style>
</head>

<body>
  <!-- NAVBAR 구현 -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container">
      <a class="navbar-brand">뉴스</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="content">
        <form action='index.php' class='d-flex p-2'>
          <button class='btn btn-outline-primary' type='submit'>로비 페이지로 돌아가기</button>
        </form>
      </div>
    </div>
  </nav>

  <section class='p-5 bg-white'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
        <div class='col-md'>
          <a href='https://www.youtube.com/channel/UCDDx4lwzZk5uZBwTunBI2CA'>
            <img src='https://i2.wp.com/www.passionweiss.com/wp-content/uploads/2016/11/vince-1.jpg?ssl=1' class='img-fluid w-50' alt=''></a>
        </div>
        <div class='col-md p-5'>
          <h1>오늘의 아티스트</h1>
          <h2 class='lead'>
            빈스 스테이플스
          </h2>
          <br>
          <p class='lead'>
            가장 위대한 아티스트, 빈스 스테이플스
            <br><br>빈스 스테이플스는 앨범 4개를 발매한
            <br>탄탄한 랩실력과 음악성을 가진 아티스트입니다.
          </p>
        </div>
      </div>
  </section>

  <section class='p-5 bg-black'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
        <div class='col-md'>
          <a href='https://www.youtube.com/playlist?list=PLzoqV_VvWIwGzYTcm3r1JwqgQOBXTvKyd'>
            <img src='https://lh3.googleusercontent.com/TWBi2M7D8gIwoo3NmhGfoVKI-PuzDunLVYpmLCbeP8Uw2YWpnjttlxmVvpVaO8uSjmLPjHgy6iGXxlPF=w544-h544-l90-rj' class='img-fluid w-50' alt=''></a>
        </div>
        <div class='col-md p-5 text-white'>
          <h1>오늘의 앨범</h1>
          <h2 class='lead'>
            Blonde by 프랭크 오션
          </h2>
          <br>
          <p class='lead'>
            가장 위대한 앨범, Blonde by 프랭크 오션
            <br><br>프랭크 오션의 'Blonde' 는 2016년에 발매된
            <br>역사에 남을 명반입니다.
          </p>
        </div>
      </div>
  </section>

  <section class='p-5 bg-white'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
        <div class='col-md'>
          <a href='https://www.youtube.com/watch?v=FCbWLSZrZfw&list=OLAK5uy_kETXpmWoHk-uZYTfEGWBpTBtQ-W6Pjb8M&index=6'>
            <img src='https://lh3.googleusercontent.com/zFImc9_bGj5JEM6J6JWsELuWwhhpv5-5dnkdSmlUDfDUTy7H2UKRUPgjPG3k2XO3rpuczv10dw1ih5q8ng=w544-h544-s-l90-rj' class='img-fluid w-50' alt=''></a>
        </div>
        <div class='col-md p-5'>
          <h1>오늘의 곡</h1>
          <h2 class='lead'>
            Chum by 얼 스웻셔츠
          </h2>
          <br>
          <p class='lead'>
            가장 위대한 곡, Chum by 얼 스웻셔츠
            <br><br>Chum 은 1집 Doris 에 수록된
            <br>잔잔한 비트와 랩이 잘 어울리는 명곡입니다.
          </p>
        </div>
      </div>
  </section>









  <meta http-equiv="Refresh" content="0; url='index.php'" />






</body>

</html>