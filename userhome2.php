<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");

  $result = mysqli_query($db, "SELECT * FROM images");
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
          <a class="navbar-brand ms-5" href="home.html"><img src="img/01.10.2022_17.10.41_REC.png" height="50px" width= "100px" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto me-4 "><!--ms for left-->
              <li class="nav-item ms-4">
                <a class="nav-link text-white" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link text-white" href="home.html#aboutss">About Us</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link text-white" href="recipes.html">Recipes</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link text-white" href="#foot">Contact Us</a>
              </li>
            </ul>
          </div>

        <div class="secnav ms-3">
            <a class="nav-link text-white" href="" id="user-name">Batool</a>
            <a class="nav-link text-white" href="" ><img src="img/cbe70db0-7b75-11ec-bd34-8df8eb963cc7.png" id="img-profile" alt=""></a>
        </div>

        </div>
    </nav> 
  
  <div class="header-cont" style="padding-top: 5%;">

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
    <h1 style="color:grey; margin-top:2%; margin-bottom: 2%; font-family: 'Montserrat Alternates', sans-serif;">Workout Programs</h1>
     
<div class="header-cont" style="display:grid; grid-template-columns: auto auto auto auto; gap: 10px;" style="width:100%">
<?php
    while ($row = mysqli_fetch_array($result)) {
echo "<div class='col-lg-4'>";
echo "<div class='prog1image'>";
echo "<a href='".$row['link']."'>"."<img src='images/".$row['image']."' height='550px' style='border-radius:5%;'>"."</a>";
echo "<div class='details1' >";
echo "<div class='day' style='padding:1% 3% 6%;border-radius:36px;margin-top: 2%; margin-left: 3%; background-color:rgb(192, 211, 228); height: 10px; width:100px;'><p><i class='fa-solid fa-business-time'></i>".$row['day']."Day</p>";
echo "</div>";
echo "<div class='text'>"."<p>'Type:'".$row['type']."<br>"."Equipment: ".$row['tools']."</p>"."</div>";
echo "</div>";
echo "</div>";
echo "</div>";
    }
  ?>
</div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>