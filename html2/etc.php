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
			<a href='etc.php' class='navbar-brand'>etc.</a>
			<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navmenu'><span class='navbar-toggler-icon'></span></button>
      <div class='collapse navbar-collapse' id='navmenu'>
        <ul class='navbar-nav ms-auto'>
        <li class='nav-item'>
            <a href='index.php' class='nav-link'>Go to Lobby Page</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class='p-5'>
    <div class='container'>
      <div class='row text-center g-4'>
        <div class='col-md'>
          <div class='card bg-info text-light'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-music-note-beamed"></i>
            </div>
            <h3 class='card-title'>
              Moohipgal
            </h3>
            <p class='card-text'>
              About Moohipgal
            </p>
            <a href='#crm' class='btn btn-outline-danger'>Read More</a>
            </div>
          </div>
        </div>
        <div class='col-md'>
          <div class='card bg-white text-black'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-file-earmark-person-fill"></i>
            </div>
            <h3 class='card-title'>
              Copyright
            </h3>
            <p class='card-text'>
              About Type Beat's Copyright
            </p>
            <a href='#trm' class='btn btn-outline-danger'>Read More</a>
            </div>
          </div>
        </div>
        <div class='col-md'>
          <div class='card bg-info text-light'>
            <div class='card-body text-center'>
              <div class='h1 mb-3'>
              <i class="bi bi-info-circle-fill"></i>
            </div>
            <h3 class='card-title'>
              And etc..
            </h3>
            <p class='card-text'>
              Everything About Moohipgal's Info
            </p>
            <a href='#lrm' class='btn btn-outline-danger'>Read More</a>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <section class='p-3'>
  <div class='container-fluid text-center p-5 bg-black text-white'>
  <h2>
<?php
    if(isset($_GET['id'])){
      echo $_GET['id'];
    }else{
      echo 'Welcome!';
    }
?>
</h2>
<p>
<?php
    if(isset($_GET['text'])){
      echo $_GET['text'];
    }else{
      echo 'There are many things about anything';
    }
?>
</p>
      </div>
  </section>


  <div id='crm' class="list-group">
    <div class='container-fluid bg-outline-warning text-dark'>
    <h1 class='text-center'>MooHipGal</h1>
  </div>
  <a href="etc.php?id=MooHipGal is for..&text=<br>It is the most practical and interactive HipHop Community in the world. Or will be.." class="accordion-button btn-warning collapsed">
  What's MooHipgal for?
  </a>
  <a href="etc.php?id=Anywhere, Anytime, Anything, Anyone..&text=<br>You can use Moohipgal just with your any devices, And If you want to use <br> more services, You have to be login to Moohipgal" class="accordion-button btn-warning collapsed">How can I use Moohipgal?</a>
  <a href="etc.php?id=It's for everyone who love HipHop Music.&text=<br>You can get any information with Moohipgal. In addition, You can get Type-Beat for your own song!<br> This is so Amazing Things." class="accordion-button btn-warning collapsed">What's the main reason of moohipgal's Service</a>
  <a href="etc.php?id=You can enjoy Moohipgal without any login.&text=<br>But If you want to enjoy more services, You need to be login to moohipgal" class="accordion-button btn-warning collapsed">What do I have to enjoy Moohipgal?</a>
  <a href="etc.php?id=Your report must be a great Feedback for MooHipGal&text=<br>Moohipgal is not a completed-project. So your help is so needed. MooHipGal can be advanced with your Report. But If your report is False and just for kidding, Your Account will be punished." class="accordion-button btn-warning collapsed">Why Moohipgal needs report?</a>
</div>

  <div id='trm' class="list-group">
  <div class='container-fluid bg-outline-warning text-dark'>
  <h1 class='text-center'>CopyRight</h1>
  </div>
  <a href="etc.php?id=MooHipGal is for..&text=<br>It is the most practical and interactive HipHop Community in the world. Or will be.." class="accordion-button btn-warning collapsed">
  What's MooHipGal for?
  </a>
  <a href="etc.php?id=Anywhere, Anytime, Anything, Anyone..&text=<br>You can use Moohipgal just with your any devices, And If you want to use <br> more services, You have to be login to Moohipgal" class="accordion-button btn-warning collapsed">How can I use Moohipgal?</a>
  <a href="etc.php?id=It's for everyone who love HipHop Music.&text=<br>You can get any information with Moohipgal. In addition, You can get Type-Beat for your own song!<br> This is so Amazing Things." class="accordion-button btn-warning collapsed">What's the main reason of moohipgal's Service</a>
  <a href="etc.php?id=You can enjoy Moohipgal without any login.&text=<br>But If you want to enjoy more services, You need to be login to moohipgal" class="accordion-button btn-warning collapsed">What do I have to enjoy Moohipgal?</a>
  <a href="etc.php?id=Your report must be a great Feedback for MooHipGal&text=<br>Moohipgal is not a completed-project. So your help is so needed. MooHipGal can be advanced with your Report. But If your report is False and just for kidding, Your Account will be punished." class="accordion-button btn-warning collapsed">Why Moohipgal needs report?</a>
</div>

  <div id='lrm' class="list-group">
  <div class='container-fluid bg-outline-warning text-dark'>
  <h1 class='text-center p-3'>Anything...</h1>
  </div>
  <a href="etc.php?id=MooHipGal is for..&text=<br>It is the most practical and interactive HipHop Community in the world. Or will be.." class="accordion-button btn-warning collapsed">
  What's MooHipGal for?
  </a>
  <a href="etc.php?id=Anywhere, Anytime, Anything, Anyone..&text=<br>You can use Moohipgal just with your any devices, And If you want to use <br> more services, You have to be login to Moohipgal" class="accordion-button btn-warning collapsed">How can I use Moohipgal?</a>
  <a href="etc.php?id=It's for everyone who love HipHop Music.&text=<br>You can get any information with Moohipgal. In addition, You can get Type-Beat for your own song!<br> This is so Amazing Things." class="accordion-button btn-warning collapsed">What's the main reason of moohipgal's Service</a>
  <a href="etc.php?id=You can enjoy Moohipgal without any login.&text=<br>But If you want to enjoy more services, You need to be login to moohipgal" class="accordion-button btn-warning collapsed">What do I have to enjoy Moohipgal?</a>
  <a href="etc.php?id=Your report must be a great Feedback for MooHipGal&text=<br>Moohipgal is not a completed-project. So your help is so needed. MooHipGal can be advanced with your Report. But If your report is False and just for kidding, Your Account will be punished." class="accordion-button btn-warning collapsed">Why Moohipgal needs report?</a>
</div>
    
    
  



  









	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>