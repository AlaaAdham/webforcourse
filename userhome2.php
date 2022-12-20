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
    <title>Q GYM</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet"  href="css/userhome.css"/>
    <link rel="stylesheet" href="css/edit.css">
    <link rel="icon" href="img/305395332_109595768554474_4676013947783116272_n.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
        <div class="secnav ms-3">
        <?php
  $db = mysqli_connect("localhost", "root", "", "qgym");
  $result = mysqli_query($db, "SELECT * FROM Clients WHERE UserName='$var_value'");
     $c=0;
         while ($row = mysqli_fetch_array($result)) {
             $c++;
             echo"<a class='nav-link text-white' href='profile.php' id='user-name'>".$row['UserName']."</a>";
             echo"<a class='nav-link text-white' href='profile.php' id='profile-img' ><img src='img/".$row['img']."' alt=''></a>";
         }
       ?>
        </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto me-4 ">
          <!--ms for left-->
          <li class="nav-item ms-4">
            <a class="nav-link text-white" aria-current="page" href="home2.php">Home</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link text-white " href="userhome2.php">Workout</a>
          </li
          
          <li class="nav-item ms-4">
            <a class="nav-link text-white " href="home2.php#aboutss">About US</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link text-white " href="recipes2.php">Recipes</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link text-white " href="home2.php#foot">Contact Us</a>
          </li>
          <li class="nav-item2 ms-4">
            <a class="nav-link btn btn-outline-info text-white" href="logInn.php">Logout</a>
          </li>
        </ul>
          </div>
     
        </div>
    </nav>
  <div class="header-cont" style="padding-top:3%;">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/New folder/Fitness-helps-you-think-and-feel-better.jpg"  class="d-block w-100 h-100" alt="">
      </div>
        <div class="carousel-item">
          <img src="img/New folder/How-to-Maximise-Time-Spent-at-the-Gym.jpg" class="d-block w-100 h-100" alt="">
      </div>
        <div class="carousel-item">
          <img src="img/5e3447b059899d14b943051c_person-holding-barbell-841130.jpg "class="d-block w-100 h-100" alt="">
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <section>
  <div class="info" style="padding:7%; width:100%">
    <h2>Save Program:</h2>
    <form action="userhome2.php" method="post">
    <div class="form-floating mb-3" style="width:50%;">
            <input type="number" class="form-control" id="progId" name="id" onclick="design(id)" onmouseout="normal(id)" placeholder="Program ID">
            <label for="progId">Program ID to save</label>
            </div>
        <input type="submit" name="save" class="btn btn-outline-info" value="Save">
        </div>
    </form>
  </div>
  <section>
    <h1 style="color:grey; margin-top:2%; margin-bottom: 2%; font-family: 'Montserrat Alternates', sans-serif;">Workout Programs</h1>

<div class="header-cont" style=" margin-left:2%; display:grid; grid-template-columns: auto auto auto; gap: 10px;" style="width:100%">

<?php

$db = mysqli_connect("localhost", "root", "", "qgym");
$result = mysqli_query($db, "SELECT * FROM images");
$c=0;
    while ($row = mysqli_fetch_array($result)) {
      $c++;
echo "<form method='POST' action='userhome2.php'>";
echo "<div class='col-lg-4'>";
echo "<div class='prog1image'>";
echo "<a href='".$row['link']."'>"."<img  src='images/".$row['image']."' height='550px' style='border-radius:5%;'>"."</a>";
echo "<div class='details1' style='padding-top:7%; padding-left:6%; '>";
echo "<p>Program ID:".$c."<br>"."</p>";
echo "<div class='day' style='padding:1% 3% 6%;border-radius:36px;margin-top: 2%; margin-left: 3%; background-color:rgb(192, 211, 228); height: 10px; width:100px;'><p><i class='fa-solid fa-business-time'></i>".$row['day']."Day</p>";
echo "</div>";
echo "<div class='text'>"."<p>Type:".$row['type']."<br>"."Equipment: ".$row['tools']."</p>"."</div>";
echo "<a href='".$row['link']."' style='text-decoration:none; color:black; border:1px solid black; padding:1%; border-radius:5px'><input type='submit' name='go' value='$c' style='background-color: transparent; border:none; '>Start</a>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</form>";
}
  ?>
</div>
  </section>
  <?php
 $db=new mysqli('localhost','root','','qgym');
 // Initialize message variable
 $msg = "";
 // If upload button is clicked ...
 if (isset($_POST['save'])) {
  $id=$_POST['id'];
  echo "$id";
  $result = mysqli_query($db, "SELECT * FROM images");
  $c=0;
    while ($row = mysqli_fetch_array($result)) {
      $name=$var_value;
      $c++;
      if($c==$id){
        $image=$row['image'];
        $link=$row['link'];
        $sql = "INSERT INTO cliprog (username,image,link) VALUES ('$name','$image','$link')";
            // execute query
            mysqli_query($db, $sql);
      }
    }
 }
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>