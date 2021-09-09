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
            <a href='community.php' class='nav-link'>Community</a>
          </li>
          <li class='nav-item'>
            <a href='typebeat.php' class='nav-link'>Type Beat</a>
          </li>
          <li class='nav-item'>
            <a href='albums.php' class='nav-link'>Albums</a>
          </li>
          <li class='nav-item'>
            <a href='lyrics.php' class='nav-link'>Lyrics</a>
          </li>
          <li class='nav-item'>
            <a href='index.php' class='nav-link'>Lobby Page</a>
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
              <i class="bi bi-lock-fill"></i>
            </div>
            <h3 class='card-title'>
              Registration
            </h3>
            <p class='card-text'>
              About Registration
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
  <div id='crm' class='container-fluid text-center bg-black text-black p-5'>
    <h1 class='p-3 text-white'>About Registration</h1>
  <div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        What Should I do to join Community?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can join Community anytime.</strong><br><br>Log-In System will be given to you. But you can join community by Log-Out User. But you can't write comment or post in Community.
        But Accessing Community, Reading Other Community Members' Post are not needed Log-in. You can Login at the top of MooHipGal page. If you are in Mobile-Environment, Touch Hamberger-Button and 
        Go to Login Page and You can Register very easily. Thanks for enjoying our community.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Does type beat cost money to use?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>It doesn't cost for using.</strong><br><br>Moohipgal's Type beat is for Beginners' beat and Users must upload their beat for free. You can download other producers' Type-Beat any time. 
        And For producers, You must agree the terms of type-beat's No-Copyright. And do not require users to give you money. And If you want to download producers' Type-Beat You must be log-in to Moohipgal.
        Use real Producers' Type Beat anytime!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        How can I report error in Moohipgal?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can send Report at Lobby Page</strong><br><br>You can report your discomfort anytime you want. Report is needed Log-In So you must be log-in before you report to developer. You must report 
        error, advice, etc. But if you report not-associated things. You can be punished without warning.
      </div>
    </div>
  </div>
</div>
<div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      What is the difference of 'Albums' Page and 'Community' Page?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>It is difference of Share and Information</strong><br><br>Community is for everything like sharing songs, advertising their music, or music video and also Albums! But 'Albums'
        Page is a series of every album. You can find your albums' information written by other users. It is similar with WikiPedia. But it's for Hip-Hop Albums like Illmatic And To Pimp A Butterfly etc. 
        If you want information of your favorite albums, You can visit 'Albums' Page and read that!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        What's the 'Lyrics' Page and What can I get through it?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can get your favorite songs' Lyrics Anytime!</strong><br><br>If you want to get your favorite songs' Lyrics, You must visit 'Lyrics' Page! Lyrics Page is Uploaded by other users.
        And finally, If Songs' Lyrics have errors, Report to developer in Lobby Page. Thanks.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Does MooHipGal have Mebership service or Subscribing?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>No, There isn't. And We don't have an idea like Money-Needed Service yet.</strong><br><br>
      </div>
    </div>
  </div>
</div>
    </div>
  </section>




  <section class='p-3'>
  <div id='trm' class='container-fluid text-center bg-black text-black p-5'>
    <h1 class='p-3 text-white'>About Copyright</h1>
  <div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        What Should I do to join Community?
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can join Community anytime.</strong><br><br>Log-In System will be given to you. But you can join community by Log-Out User. But you can't write comment or post in Community.
        But Accessing Community, Reading Other Community Members' Post are not needed Log-in. You can Login at the top of MooHipGal page. If you are in Mobile-Environment, Touch Hamberger-Button and 
        Go to Login Page and You can Register very easily. Thanks for enjoying our community.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Does type beat cost money to use?
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>It doesn't cost for using.</strong><br><br>Moohipgal's Type beat is for Beginners' beat and Users must upload their beat for free. You can download other producers' Type-Beat any time. 
        And For producers, You must agree the terms of type-beat's No-Copyright. And do not require users to give you money. And If you want to download producers' Type-Beat You must be log-in to Moohipgal.
        Use real Producers' Type Beat anytime!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingNine">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
        How can I report error in Moohipgal?
      </button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can send Report at Lobby Page</strong><br><br>You can report your discomfort anytime you want. Report is needed Log-In So you must be log-in before you report to developer. You must report 
        error, advice, etc. But if you report not-associated things. You can be punished without warning.
      </div>
    </div>
  </div>
</div>
<div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTen">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
      What is the difference of 'Albums' Page and 'Community' Page?
      </button>
    </h2>
    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>It is difference of Share and Information</strong><br><br>Community is for everything like sharing songs, advertising their music, or music video and also Albums! But 'Albums'
        Page is a series of every album. You can find your albums' information written by other users. It is similar with WikiPedia. But it's for Hip-Hop Albums like Illmatic And To Pimp A Butterfly etc. 
        If you want information of your favorite albums, You can visit 'Albums' Page and read that!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEleven">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
        What's the 'Lyrics' Page and What can I get through it?
      </button>
    </h2>
    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can get your favorite songs' Lyrics Anytime!</strong><br><br>If you want to get your favorite songs' Lyrics, You must visit 'Lyrics' Page! Lyrics Page is Uploaded by other users.
        And finally, If Songs' Lyrics have errors, Report to developer in Lobby Page. Thanks.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwelve">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
        Does MooHipGal have Mebership service or Subscribing?
      </button>
    </h2>
    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>No, There isn't. And We don't have an idea like Money-Needed Service yet.</strong><br><br>
      </div>
    </div>
  </div>
</div>
    </div>
  </section>





  <section class='p-3'>
  <div id='lrm' class='container-fluid text-center bg-black text-black p-5'>
    <h1 class='p-3 text-white'>About Everything</h1>
  <div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThirteen">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
        What Should I do to join Community?
      </button>
    </h2>
    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can join Community anytime.</strong><br><br>Log-In System will be given to you. But you can join community by Log-Out User. But you can't write comment or post in Community.
        But Accessing Community, Reading Other Community Members' Post are not needed Log-in. You can Login at the top of MooHipGal page. If you are in Mobile-Environment, Touch Hamberger-Button and 
        Go to Login Page and You can Register very easily. Thanks for enjoying our community.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFourteen">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
        Does type beat cost money to use?
      </button>
    </h2>
    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>It doesn't cost for using.</strong><br><br>Moohipgal's Type beat is for Beginners' beat and Users must upload their beat for free. You can download other producers' Type-Beat any time. 
        And For producers, You must agree the terms of type-beat's No-Copyright. And do not require users to give you money. And If you want to download producers' Type-Beat You must be log-in to Moohipgal.
        Use real Producers' Type Beat anytime!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFifteen">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
        How can I report error in Moohipgal?
      </button>
    </h2>
    <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can send Report at Lobby Page</strong><br><br>You can report your discomfort anytime you want. Report is needed Log-In So you must be log-in before you report to developer. You must report 
        error, advice, etc. But if you report not-associated things. You can be punished without warning.
      </div>
    </div>
  </div>
</div>
<div class="accordion" id="questions">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSixteen">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
      What is the difference of 'Albums' Page and 'Community' Page?
      </button>
    </h2>
    <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>It is difference of Share and Information</strong><br><br>Community is for everything like sharing songs, advertising their music, or music video and also Albums! But 'Albums'
        Page is a series of every album. You can find your albums' information written by other users. It is similar with WikiPedia. But it's for Hip-Hop Albums like Illmatic And To Pimp A Butterfly etc. 
        If you want information of your favorite albums, You can visit 'Albums' Page and read that!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeventeen">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
        What's the 'Lyrics' Page and What can I get through it?
      </button>
    </h2>
    <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You can get your favorite songs' Lyrics Anytime!</strong><br><br>If you want to get your favorite songs' Lyrics, You must visit 'Lyrics' Page! Lyrics Page is Uploaded by other users.
        And finally, If Songs' Lyrics have errors, Report to developer in Lobby Page. Thanks.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEighteen">
      <button class="accordion-button btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
        Does MooHipGal have Mebership service or Subscribing?
      </button>
    </h2>
    <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>No, There isn't. And We don't have an idea like Money-Needed Service yet.</strong><br><br>
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