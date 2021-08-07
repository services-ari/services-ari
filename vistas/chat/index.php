<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>OLYMPUS-CHEKER</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<style type="text/css">@import url("css/login.css");</style>

<!-- Google Fonts -->
<!-- Vendor CSS Files -->
	
</head>
<?php 
	include "layouts/header.php"; 
	include 'layouts/menu.php';

	?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  .contenido {
    margin-left: 20%;
    margin-top: -30%;
    width: 50%;
    background-color: #26262b9e;
    padding-top: 5%;
    padding-bottom: 5%;
    padding-right: 10%;
    padding-left: 10%;
    position: absolute;
}
  .btn-primary {
    background-color: #673AB7;
}
  </style>
<?php
  include "config.php";
  if($_POST)
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM `register` where email = '".$email."' and password = '".$password."' ";
		$query =  mysqli_query($conn, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['name'] = $row['name'];
			header('Location: home.php');
		}
		else
		{
			echo "<script> alert('Correo o contraseña incorrectas.'); </script>";
		}
	}
?>

<div class="contenido">
  <center><h2>Formulario de Registro</h2></center></br>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Correo:</label>
	  
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="ingresa tu correo" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Pass:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="ingresa una contraseña" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
