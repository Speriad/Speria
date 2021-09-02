<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link href="https://i.ibb.co/hKp3HtP/DAMN.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">

	<title>부트스트랩</title>
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
        <h2 class='mb-2 mb-md-0'>Log-In to enjoy all services</h2>
        <div class='input-group'>
          <form action='condb.php' method='post'>
          <input type='text' class='form-control'
          placeholder='ID' aria-label='id' aria-describedby='loginbutton' name='id' id='id'>
          <div class='input-group'>
          <input type='password' class='form-control'
          placeholder='Password' aria-label='password' aria-describedby='loginbutton' name='password' id='password'>
          <div class='input-group'>
            <button class='btn btn-warning btn-md' type='submit'
          id='loginbutton'>GO</button>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <section>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  If you get log-in to here, You can approach to every service!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  </section>








	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>