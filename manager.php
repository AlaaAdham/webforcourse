<?php
session_start();
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "qgym");
  $result = mysqli_query($db, "SELECT * FROM images");
  $var_value=$_SESSION['username'];
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.min.css">
    <title>Q GYM</title>
  <link rel="icon" href="img/305395332_109595768554474_4676013947783116272_n.jpg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <style>
        body
        {
            background-image: url(img/manage.jpg);
            background-size: cover;
            background-position: 0 -55px;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand ms-5" href="manager.php"><img src="img/01.10.2022_17.10.41_REC.png" height="50px" width= "100px" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto me-4 "><!--ms for left-->
              <li class="nav-item2 ms-4">
                <a class="nav-link btn btn-outline-info text-white"  href="logIn.html">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
<div class="butoons" style=" margin:auto; margin-top: 10%; width:40%; height:400px; border: 3px solid #30322d; padding: 10px; text-align: center; background-color: #424d57b3;">
    <a  href="managerR.php" style="color:black ;margin-top: 20%; margin-right: 9%; padding-top: 10%; padding-bottom: 10%; " class="btn btn-outline-info">Manage Recipes</a>
    <a  href="managerP.php"  style="color:black ; margin-top: 20%; padding-top: 10%; padding-bottom: 10%; "class="btn btn-outline-info">Manage Programs</a>
</div>
<body>
    
</body>
</html>