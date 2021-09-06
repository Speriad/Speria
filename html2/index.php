<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://i.ibb.co/hKp3HtP/DAMN.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<title>MooHipGal</title>
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
			<a href='index.html' class='navbar-brand'>Lobby Page</a>
			<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navmenu'><span class='navbar-toggler-icon'></span></button>
      <div class='collapse navbar-collapse' id='navmenu'>
        <ul class='navbar-nav ms-auto'>
          <li class='nav-item'>
            <a href='#commnunity' class='nav-link'>Community</a>
          </li>
          <li class='nav-item'>
            <a href='#typebeat' class='nav-link'>Type Beat</a>
          </li>
          <li class='nav-item'>
            <a href='#notice' class='nav-link'>Notice</a>
          </li>
          <li class='nav-item'>
            <a href='#albums' class='nav-link'>Albums</a>
          </li>
          <li class='nav-item'>
            <a href='#Lyric' class='nav-link'>lyric</a>
          </li>
          <li class='nav-item'>
            <a href='#policy' class='nav-link'>Policy</a>
          </li>
          <li class='nav-item'>
            <a href='#about' class='nav-link'>About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Showcase 구현 -->

  <section class='bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start'>
    <div class='container'>
      <div class='d-sm-flex align-items-center justify-content-between'>
        <div>
          <h1><span class='text-warning'>Kanye West</span> Was Out New Album <span class='text-warning'>'DONDA'</span></h1>
          <p class='lead my-4'>Finally, He released 10th album, 'DONDA'</p>
          <a class="btn btn-danger btn-lg" href="https://youtube.com/playlist?list=PL8czsbhQP4tvew4t_V2PL-wUMbxIUdz4o" role="button">Listen in YouTube</a>
        </div>
        <a href='https://www.youtube.com/watch?v=y4l85Qrnd-c'><img class='img-fluid w-200 d-none d-sm-block' src='https://lh3.googleusercontent.com/gd7qsOzpy8aoUf0SV1E-LZiUjo03QYiDNFRwSwQc3h5rBG8JHuk1P_nsB7I9A4rS_cMpyU18D8SEOA7iDw=w544-h544-l90-rj' alt='' /></a>
      </div>
    </div>
  </section>

  <!-- Newsletter 구현 -->

  <section class='bg-primary text-light p-4'>
    <div class='container'>
      <div class='d-md-flex justify-content-between align-items-center'>
        <h2 class='mb-2 mb-md-0'>Report your opinion to improve our website</h2>
        <div class='input-group'>
          <form action='condb.php' method='post'>
          <input type='text' class='form-control'
          placeholder='닉네임' aria-label='ID' aria-describedby='loginbutton' name='id' id='id'>
          <div class='input-group'>
          <input type='text' class='form-control'
          placeholder='내용' aria-label='Password' aria-describedby='loginbutton' name='password' id='password'>
          <div class='input-group'>
            <button class='btn btn-outline-warning btn-md' type='submit'
          id='loginbutton'>전송</button>
            </form>
            <form action='#'>
            <button type='submit' class='btn btn-outline-warning'>신고를 하는 이유</button>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <section>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  신고는 바로 만든 사람에게 전송됩니다.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
              Community
            </h3>
            <p class='card-text'>
              Most intuitive HipHop Community
            </p>
            <a href='#' class='btn btn-outline-warning'>Read More</a>
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
              Type Beat
            </h3>
            <p class='card-text'>
              Get your type beat for free
            </p>
            <a href='#' class='btn btn-outline-warning'>Read More</a>
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
              Lyrics
            </h3>
            <p class='card-text'>
              Find your songs' Lyrics
            </p>
            <a href='#' class='btn btn-outline-warning'>Read More</a>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <!-- Other Sections -->

  <section id='learn' class='p-5 bg-light'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
      <div class='col-md'>
          <img src='https://i.pinimg.com/originals/01/1b/24/011b24f9cb707b842aeb862ef9d54e5a.gif' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5'>
          <h2>Gather With your HipHop Friends!</h2>
          <p class='lead'>
            If you want to talk with your same-taste friends or share your favorite songs with them, 
            Here is the best one! Find your hidden taste or not-famous but, well-made songs. 
          </p>
          <p class='lead'>
            Community for HipHop Fans and Musicians. Share your favorite songs!
          </p>
          <a href='' class='btn btn-dark mt-3'>
            <i class='bi bi-chevron-right'>Dive into Community</i>
          </a>
        </div>
      </div>
  </section>

  <section id='learn' class='p-5 bg-black'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
        <div class='col-md'>
          <img src='https://i.pinimg.com/originals/7e/3b/50/7e3b5074bfb8f14f0d68d6851b56447b.jpg' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5 text-white'>
          <h2>Get Your Type Beat that fits!</h2>
          <p class='lead text-white'>
            If you want to talk with your same-taste friends or share your favorite songs with them, 
            Here is the best one! Find your hidden taste or not-famous but, well-made songs. 
          </p>
          <p class='lead text-white'>
            Community for HipHop Fans and Musicians. Share your favorite songs!
          </p>
          <a href='' class='btn btn-light mt-3'>
            <i class='bi bi-chevron-right'>Dive into Type Beat</i>
          </a>
        </div>
      </div>
  </section>

  <!-- Question Accordian -->

  <section id='questions' class='p-5'>
    <div class='container'>
      <h2 class='text-center mb-4'>FAQ (Frequently Asked Questions)</h2>
      <div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        What Should I do to join Community?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can join Community anytime.</strong><br><br>Log-In System will be given to you. But you can join community by Log-Out User
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Does type beat cost for using?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>It doesn't cost for using.</strong><br><br>Moohipgal's Type beat is for Beginners' beat and Users must upload their beat for free.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        How can I report error in Moohipgal?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can send Report at Lobby Page</strong><br><br>Write Nickname and What you want to say, It can send to developer directly.
      </div>
    </div>
  </div>
</div>
<div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        AAAAAAA
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong><br><br>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        AAAAAAAAA
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong><br><br>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        AAAAAAAAAAA
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong><br><br>
      </div>
    </div>
  </div>
</div>
    </div>
  </section>
    
  



  









	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>