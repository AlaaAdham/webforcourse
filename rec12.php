
<?php

session_start();
$var_value=$_SESSION['username'];
$name=$_POST['recName'];
$db=new mysqli('localhost','root','','qgym');
$result = mysqli_query($db, "SELECT * FROM recipes WHERE name='" . $name . "'");
$c=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Recipes</title>
    
    <link rel="icon" href="img/305395332_109595768554474_4676013947783116272_n.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/rec1.css">
</head>
<body>

    
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
        <div class="container-fluid">
  
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto me-4 "><!--ms for left-->
              <li class="nav-item ms-4">
                <a class="nav-link text-white" aria-current="page" href="home2.php">Home</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link text-white" href="home2.php#aboutss">About Us</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link text-white" href="recipes2.php">Recipes</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link text-white" href="#foot">Contact Us</a>
              </li>
              <li class="nav-item2 ms-4">
            <a class="nav-link btn btn-outline-info text-white" href="logInn.php">Logout</a>
          </li>
            </ul>
          </div>

         
          

        </div>
    </nav>
    <?php
              $db=new mysqli('localhost','root','','qgym');
              $result = mysqli_query($db, "SELECT * FROM recipes WHERE name='" . $name . "'");
              while ($row = mysqli_fetch_array($result)) {
              echo"<header style='background-image: url(recipes/".$row['imgI']."); background-position: center; background-size: cover; position: relative; width: 100%; height: 100vh;'>";
              }
              ?>
        <div class="container">
            <div class="cont">
              <?php
              $db=new mysqli('localhost','root','','qgym');
              $result = mysqli_query($db, "SELECT * FROM recipes WHERE name='" . $name . "'");
              while ($row = mysqli_fetch_array($result)) {
              echo"<h2>".$row['name']."</h2>";
              }
              ?>
                <div class="info">
                    <div class="info-cont">
              <?php
              $db=new mysqli('localhost','root','','qgym');
              $result = mysqli_query($db, "SELECT * FROM recipes WHERE name='" . $name . "'");
              while ($row = mysqli_fetch_array($result)) {
              echo"<h3>".$row['prepT']."min</h3>";
              }
              ?>
                        <p>PREP TIME</p>
                    </div>
                    <div class="info-cont">
              <?php
              $db=new mysqli('localhost','root','','qgym');
              $result = mysqli_query($db, "SELECT * FROM recipes WHERE name='" . $name . "'");
              while ($row = mysqli_fetch_array($result)) {
              echo"<h3>".$row['cookT']."min</h3>";
              }
              ?>
                        <p>COOK TIME</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section> 
        <div class="continer" style="margin-left:2%;">
            <div class="cont">
                <div class="ing-cont">
                    <h3>Ingredients</h3>
                    <div class="ing">
              <?php
              $db=new mysqli('localhost','root','','qgym');
              $result = mysqli_query($db, "SELECT * FROM recipes WHERE name='" . $name . "'");
              while ($row = mysqli_fetch_array($result)) {
              echo"<h4>".$row['ingred']."</h4>";
              }
              ?>
                    </div>
                </div>

                <div class="step-cont">
                    <h3>Steps</h3>
                    <div class="step">
              <?php
              $db=new mysqli('localhost','root','','qgym');
              $result = mysqli_query($db, "SELECT * FROM recipes WHERE name='" . $name . "'");
              while ($row = mysqli_fetch_array($result)) {
              echo"<p>".$row['step']."</p>";
              }
              ?>
              </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="cont">
            <div class="img-cont">
              <?php
              $db=new mysqli('localhost','root','','qgym');
              $result = mysqli_query($db, "SELECT * FROM recipes WHERE name='" . $name . "'");
              while ($row = mysqli_fetch_array($result)) {
              echo "<img src='recipes/".$row['img1']."' alt='' style='width:390px; height:493px; margin-left:15%;'>";
              echo "<img src='recipes/".$row['img2']."' alt='' style='width: 395px; height: 493px;'>";
              echo "<img src='recipes/".$row['img3']."' alt='' style='width: 395px; height: 493px;'>";
              }
              ?>
            </div>
        </div>
    </section>


        
    <footer id="foot">
        <div class="container-fluid"><div class="row">
          <div class="col">
            <h2>LOCATION</h2>
            <p>2215 John Daniel Drive<br>Clark, MO 65243</p>
          </div>
            <div class="col">
              <h2>AROUND THE WEB</h2>
              <div class="row ms-3" >
            <div class="col-lg-2" >
              <a href="https://www.facebook.com/QGymRawabi/"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
            <div class="col-lg-2" >
              <a href="https://www.instagram.com/qgymrawabi/"><i class="fa-brands fa-instagram"></i></a>
            </div>
           
            <div class="col-lg-2">
              <a href="https://mail.google.com/mail/u/0/#sent?compose=CllgCJvnrgzVPNzLblSXfXxLhgDftPWnRhLRcVzwJgkQJDGwhCLKLVHlxPpZgxXTxgZgWjjfMqV"><i class="fa-brands fa-google"></i></a>
            </div>
          </div>
            </div>
            <div class="col">
              <h2>CONTACT US</h2>
              <h4>If you have any questions or need extra info. Contact us!</h4> 
              <h3>Call Us</h3>
              <h4>Feel free to call us on:</h4>
              <p>+32 30 44 53 2</p>
              <h3>Mail Us</h3>
              <h4>Feel free co mail us on:</h4>
              <p>info@lifestyle.com</p>
            </div>
          </div>
        </div>
    </footer>

    
</body>
</html>