<?php
error_reporting(E_ALL^ E_WARNING);
error_reporting(E_ALL^ E_NOTICE); 
$conn = mysqli_connect('localhost','root','','test');
mysqli_set_charset($conn,'utf8');
session_start();
$head = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='https://lh3.googleusercontent.com/0yu8Hk3siMPLzbkwOdGqgFpHlIl8ySOz-Ccj4k9KCuFf0HIF2q8xdjp_jCmOb3WoHk1tawPs4q0bjmnwGQ=w544-h544-l90-rj' rel='shortcut icon' type='image/x-icon'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We'
 crossorigin='anonymous'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'>
<meta property='og:title' content='무힙갤'>
<meta property='og:description' content='Everything of HipHop'>
<meta property='og:image' content='https://lh3.googleusercontent.com/TWBi2M7D8gIwoo3NmhGfoVKI-PuzDunLVYpmLCbeP8Uw2YWpnjttlxmVvpVaO8uSjmLPjHgy6iGXxlPF=w544-h544-l90-rj'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj'
	 crossorigin='anonymous'>
	</script>
<title>무힙갤</title>
<style>a{text-decoration:none;}</style>";
echo $head;


if(isset($_SESSION['nickname'])){
	$sqltest = "SELECT * from registration where nickname = '{$_SESSION['nickname']}'";
	$resulttest = mysqli_query($conn, $sqltest);
	$rowtest = mysqli_fetch_array($resulttest);

	if(isset($rowtest[0])){
		
	}else{
		$_SESSION['nickname'] = null;
	};
};


?>
<!-- $conn = mysqli_connect('sql206.epizy.com','epiz_29599569','8DfkA57d5o77A','epiz_29599569_php'); -->
<!-- $conn = mysqli_connect('localhost','root','','test'); -->