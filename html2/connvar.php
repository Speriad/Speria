<?php
error_reporting(E_ALL^ E_WARNING);
error_reporting(E_ALL^ E_NOTICE); 
$conn = mysqli_connect('localhost','root','','test');
mysqli_set_charset($conn,'utf8');
session_start();
$head = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='https://i.ibb.co/hKp3HtP/DAMN.jpg' rel='shortcut icon' type='image/x-icon'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We'
 crossorigin='anonymous'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'>
<meta property='og:description' content='The most popular and practical HipHop Community 'Moohipgal''>
<meta property='og:image' content='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8wtA8KFXwKZ5hxyQC5ExHZexGmpwU-0m_Xw&usqp=CAU'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj'
	 crossorigin='anonymous'>
	</script>
<title>MooHipGal</title>
<style>a{text-decoration:none;}</style>";
echo $head;

if(isset($_SESSION['nickname'])){
	
}else{
	$_SESSION['nickname'] = null;
}
?>
<!-- $conn = mysqli_connect('sql206.epizy.com','epiz_29599569','8DfkA57d5o77A','epiz_29599569_php'); -->
<!-- $conn = mysqli_connect('localhost','root','','test'); -->