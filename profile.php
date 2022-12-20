
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Q GYM- Profile </title>
  <link rel="icon" href="img/305395332_109595768554474_4676013947783116272_n.jpg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet"  href="css/userhome.css"/>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
    <div class="secnav ms-3">
        <?php
session_start();
$var_value=$_SESSION['username'];
  $db = mysqli_connect("localhost", "root", "", "qgym");
  $result = mysqli_query($db, "SELECT * FROM Clients WHERE UserName='$var_value'");
     $c=0;
         while ($row = mysqli_fetch_array($result)) {
             $c++;
             echo"<a class='nav-link text-white' href='' id='user-name'>".$row['UserName']."</a>";
             echo"<a class='nav-link text-white' href='' id='profile-img' ><img src='img/".$row['img']."' alt=''></a>";
         }
       ?>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto me-4 ">
          <!--ms for left-->
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
        </ul>
      </div>
     
    </div>
  </nav>
  <header>
    <div class="container">
      <div class="cont">
        <?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "qgym");
  $result = mysqli_query($db, "SELECT * FROM Clients WHERE UserName='$var_value'");
     $c=0;
         while ($row = mysqli_fetch_array($result)) {
             $c++;
             echo"<div class='prof-info'>";
               echo"<img src='img/".$row['img']."' alt''>";
               echo "<h2>".$row['UserName']."</h2>";
             echo "</div>";
         }
       ?>
        <div class="side">
          <div class="edit">
            <a href="edit.php">
              <h3>Edit Your Profile</h3>
            </a>
          </div>
          <div class="edit">
            <a href="calc.html">
              <h3>Calculate Your BMI</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="section">
    <div class="container">
        <h2 style=" padding-top: 5%; padding-bottom: 2%; color: #424141; font-size: 25px;">Started Program</h2>
      <div class="cont" style="display:grid; grid-template-columns: auto auto auto auto; gap: 10px;">
     <div class="header-cont"  style="width:100%">
     <?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "qgym");
  $result = mysqli_query($db, "SELECT * FROM cliprog WHERE UserName='$var_value'");
     $c=0;
         while ($row = mysqli_fetch_array($result)) {
             $c++;
             echo "<div class='col-lg-4'>";
             echo "<div class='prog1image'>";
             echo "<a href='".$row['link']."'>"."<img src='images/".$row['image']."' height='550px' style='border-radius:5%;'>"."</a>";
             echo "<div class='details1' style='padding-top: 50%; padding-left: 25%;'>";
              echo "<a href='".$row['link']."' style='text-decoration:none; color:black; border:1px solid black; padding:1%; border-radius:5px'><input type='submit' name='go' value='Countinue' style='background-color: transparent; border:none; '></a>";
             echo "</div>";
             echo "</div>";
             echo "</div>";
     echo "</div>";
         }
       ?>
        </div>
      </div>
    </div>
  </section>
  <footer id="foot">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2>LOCATION</h2>
          <p>2215 John Daniel Drive<br>Clark, MO 65243</p>
        </div>
        <div class="col">
          <h2>AROUND THE WEB</h2>
          <div class="row ms-3">
            <div class="col-lg-2">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
            <div class="col-lg-2">
              <a href="#"><i class="fa-solid fa-dove"></i></a>
            </div>
            <div class="col-lg-2">
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-2">
              <a href="#"><i class="fa-brands fa-google"></i></a>
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