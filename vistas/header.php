
<?php

session_start();

if(empty($_SESSION['usuario'])){
  header("Location: login.php");
}


?>
<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 OLYMPUS CHEKER (#)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   OLYMPUS CHEKER
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="../assets/scss/loading.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.buttonload {
  background-color: #04AA6D; /* Green background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 24px; /* Some padding */
  font-size: 16px; /* Set a font-size */
}

/* Add a right margin to each icon */
.fa {
  margin-left: -12px;
  margin-right: 8px;
}

</style>
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" style="background-image:url(../assets/img/sidebar-1.jpg); background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <style media="screen">
    .nav-item{

    }
      .nav-link{
        background: linear-gradient(
60deg
, green, red);
        -webkit-box-shadow: 2px 2px 5px #000;
  -moz-box-shadow: 2px 2px 5px #000;
  filter: shadow(color=#000000, direction=135, strength=2);
      }
    </style>
      <div class="logo"><a href="#" class="simple-text logo-normal">
          OLYMPUS CHEKER
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav" >
          <li id="menu1" class="nav-item">
            <a class="nav-link" href="./dashboard.php" style="background: linear-gradient(166deg, rgba(253,29,29,0.8242647400757178) 0%, rgba(0,0,0,0.6113795860140931) 100%);">
              <i style="color:white;" class="material-icons">home</i>
              <p style="color:white;">Inicio</p>
            </a>
          </li>
          <li id="menu2" class="nav-item ">
            <a class="nav-link" href="./ccv1.php" style="background: linear-gradient(166deg, rgba(253,29,29,0.8242647400757178) 0%, rgba(0,0,0,0.6113795860140931) 100%);">
              <i style="color:white;" class="material-icons">payment</i>
              <p style="color:white;">Card Cheker</p>
            </a>
          </li>
          <li id="menu3" class="nav-item ">
            <a class="nav-link" href="https://0lympus-cheker.com/ccgen/" style="background: linear-gradient(166deg, rgba(253,29,29,0.8242647400757178) 0%, rgba(0,0,0,0.6113795860140931) 100%);" target="_blank">
              <i style="color:white;" class="material-icons">card_membership</i>
              <p style="color:white;">Generador</p>
            </a>
          </li>
          <li id="menu4" class="nav-item ">
            <a class="nav-link" href="" style="background: linear-gradient(166deg, rgba(253,29,29,0.8242647400757178) 0%, rgba(0,0,0,0.6113795860140931) 100%);">
              <i style="color:white;" class="material-icons">bathroom</i>
              <p style="color:white;" >Bins</p>
            </a>
          </li>
          <li id="menu5" class="nav-item ">
            <a class="nav-link" href="" style="background: linear-gradient(166deg, rgba(253,29,29,0.8242647400757178) 0%, rgba(0,0,0,0.6113795860140931) 100%);">
              <i style="color:white;" class="material-icons">local_atm</i>
              <p style="color:white;">MIS CC</p>
            </a>
          </li>

          <li id="menu5" class="nav-item ">
            <a class="nav-link" href="chat/chatpage.php" style="background: linear-gradient(166deg, rgba(253,29,29,0.8242647400757178) 0%, rgba(0,0,0,0.6113795860140931) 100%);">
              <i style="color:white;" class="material-icons">question_answer</i>
              <p style="color:white;">CHAT</p>
            </a>
          </li>
          <li id="menu6" class="nav-item ">
            <a class="nav-link" href="login.php" style="background: linear-gradient(166deg, rgba(253,29,29,0.8242647400757178) 0%, rgba(0,0,0,0.6113795860140931) 100%);">
              <i style="color:white;" class="material-icons">logout</i>
              <p style="color:white;" >SALIR</p>
            </a>
          </li>

          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel"  style="background-image:url(../assets/img/sidebar-1.jpg); background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">OLYMPUS CHEKER  </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">

            </ul>
          </div>
        </div>
      </nav>
