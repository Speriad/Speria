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
			<a href='regi_show.php' class='navbar-brand'>Registration</a>
    </div>
  </nav>

<!-- Showcase 구현 -->

  <section class='bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start'>
    <div class='container'>
      <div class='d-sm-flex align-items-center justify-content-between'>
        <div>
          <h1><span class='text-warning'>Here is Registration</span>
          <p class='lead my-4'>You can enjoy more services if you register to MooHipGal</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter 구현 -->
  <section class='bg-primary text-light p-4'>
    <div class='container'>
    <br><h1 style='text-align: center;'>Registration</h1><br>
<form action='regi.php' method='post'>
<input type='text' class= 'form-control' name = 'nickname' placeholder='USERNAME' required>
<br><input type='password' class= 'form-control' name = 'pw' placeholder='PASSWORD' required>
<br><input type='password' class= 'form-control' name = 're-pw' placeholder=' WRITE PASSWORD AGAIN' required>
<br><button role='submit' class='btn btn-outline-warning'>Send Registration Request</button> 
</form>
<form action='index.php'>
<button role='submit' class='btn btn-outline-warning'>Back To Log-In</button>
</form>
    </div>
  </section>
  <section>
  <div class='alert alert-warning alert-dismissible fade show' role='alert'>
  Your Information will safely be saved.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>
  </section>

    
    
  



  









</body>

</html>