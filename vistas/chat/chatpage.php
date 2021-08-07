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

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="css/chat.css" rel="stylesheet" type="text/css">
<!-- Vendor CSS Files -->
	
</head>
<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php";
		include "layouts/menu.php";
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }
  .contenido {
    margin-left: 20%;
    margin-top: -30%;
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
	.display-chat{
		height:300px;
		background-color:#d69de0;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #c616e469;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>

<meta http-equiv="refresh" content="20">
<script>

      $(document).ready(function(){
        // Set trigger and container variables
        var trigger = $('.container .display-chat '),
            container = $('#content');
        
        // Fire on click
        trigger.on('click', function(){
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');       
          
          // Load target page into container
          container.load(target + '.php');
          
          // Stop normal link behavior
          return false;
        });
      });
    </script>


<div class="contenido">
  <center><h2>Bienvenid@ <span style="color:#dd7ff3;"><?php echo $_SESSION['name']; ?> !</span></h2>
	<label>Acá puedes hablar tranquil@</label>
  </center></br>
   <div class="display-chat" id = "display-chat">
<?php
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
		<div class="message">
			<p>
				<span><?php echo $row['name']; ?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				No hay ninguna conversación previa.
			</p>
</div>
<?php
	} 
?>

  </div>


  
  <form class="form-horizontal" method="post" action="sendMessage.php">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="msg" class="form-control" placeholder="Ingresa tu mensaje acá..."></textarea>
      </div>
	         
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary" >Enviar</button>
      </div>

    </div>
  </form>
</div>


</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>