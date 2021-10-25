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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand">News</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="content">   
      <?php
	  if(isset($_POST['nickname'])){
        $button1 = "<form action='index.php' method='post' class='d-flex p-2'><input type='hidden' name='nickname' value='{$_POST['nickname']}'>
        <button class='btn btn-outline-primary' type='submit'>Go To Lobby Page</button>
        </form>";
        echo $button1;
	  }else{
		$button1 = "<form action='index.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>Go To Lobby Page</button>
        </form>";
        echo $button1;
	  };
      ?>
  </div>
  </div>
</nav>

<section class='p-5 bg-white'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
      <div class='col-md'>
          <img src='https://is3-ssl.mzstatic.com/image/thumb/Features115/v4/13/3d/89/133d89fd-9305-6eae-14ad-1668e0e5279d/mza_4449571582288811102.png/800x800cc.jpg' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5'>
          <h1>Today's Rapper</h1>
          <h2 class='lead'>
            Kendrick Lamar 
          </h2>
          <br><p class='lead'>
            The Most Greatest Rapper, Kendrick Lamar
          </p>
        </div>
      </div>
  </section>

  <section class='p-5 bg-black'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
      <div class='col-md'>
          <img src='https://images-na.ssl-images-amazon.com/images/I/713N4ZIYsEL.jpg' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5 text-white'>
          <h1>Today's Album</h1>
          <h2 class='lead'>
           My Beautiful Dark Twisted Fantasy by Kanye West
          </h2>
          <br><p class='lead'>
            The Most Greatest Album, My Beautiful Dark Twisted Fantasy by Kanye West
          </p>
        </div>
      </div>
  </section>

  <section class='p-5 bg-white'>
    <div class='container'>
      <div class='row align-items-center justify-content-center'>
      <div class='col-md'>
          <img src='https://ww.namu.la/s/2d598f934357dc6b034633bbf49e3662d5642909a0721abd1fb2b417520dd37e6b1c209dff47b84e5d32ea01194f27b1bc61d980f20650e8b724ad4a57940b78957cc43963860cf6d41c42926405433510bc6db034ece2ae04fe7cdb236f7d09' class='img-fluid' alt=''>
        </div>
        <div class='col-md p-5'>
          <h1>Today's Song</h1>
          <h2 class='lead'>
            Heartless by Kanye West
          </h2>
          <br><p class='lead'>
            The Most Greatest Song, Heartless by Kanye West
          </p>
        </div>
      </div>
  </section>
    
    
  



  









</body>

</html>