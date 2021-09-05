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
          <img src='https://image.freepik.com/free-vector/diverse-crowd-people-different-ages-races_74855-5235.jpg' class='img-fluid' alt=''>
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
    <!-- 44:44 -->
  </section>
    
  



  









	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>