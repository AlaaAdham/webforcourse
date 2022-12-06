
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
    <link rel="stylesheet" href="css/recipes.css">  
    

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

          <div class="secnav ms-3" style=" display: flex; align-items: center; flex-direction: column-reverse;">
              <a class="nav-link text-white" href="" id="user-name">Batool</a>
            <a class="nav-link text-white" href="" id="profile-img"><img src="img/cbe70db0-7b75-11ec-bd34-8df8eb963cc7.png" alt="" style=" border-radius: 50%; width: 40px; height: 40px;"></a>
          </div>
          

        </div>
    </nav>

    <section class="filter">
      <div class="dropdown-center">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sort by 
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Sort by Latest</a></li>
            <li><a class="dropdown-item" href="#">Sort by A to Z</a></li>
            <li><a class="dropdown-item" href="#">Sort by Z to A</a></li>
          </ul>
      </div>
    </section>


    <section class="recipes">
    <div class="container">
    <div class="contain">
        <div class="latest-rec">
        <h2>Latest Recipes</h2>
        <div class="cont">
          <a href=""><img src="img/satay-tofu-skewers-1664423108678-1x1.webp" alt=""></a>
            <div class="rec-cont">
                <h3>SATAY TOFU SKEWERS</h3>
                <p>These grilled satay tofu skewers are incredibly flavorful and meaty! Completed with a healthy and delicious satay dipping sauce, you won’t be able to stop at one!</p>
                <a href="#rec"><button>View Recipes</button></a> 
            </div>
        </div>
        </div>

        <div class="filter-rec">
        <h2>Popular Categories</h2>
        <div class="category">
            <img src="img/healthy-crispy-baked-chicken-nuggets-square.webp" alt="">
            <div class="img-cont">
                <h2>High Protein</h2>
                <h3></h3>
            </div>
        </div>

        <div class="category">
            <img src="img/low-carb-high-protein-waffles---gf-square.webp" alt="">
            <div class="img-cont">
                <h2>Low Carb</h2>
                <h3></h3>
            </div>
        </div>

        <div class="category">
            <img src="img/5-ingredient-creamy-tomato-lentil-curry-square.webp" alt="">
            <div class="img-cont">
                <h2>Dairy Free</h2>
                <h3></h3>
            </div>
        </div>

        <div class="category">
            <img src="img/rainbow-falafel-salad-bowl-square.webp" alt="">
            <div class="img-cont">
                <h2>Vegetarian</h2>
                <h3></h3>
            </div>
        </div>
        </div>
    </div>
    </div>
    </section>


    <section class="section" id="rec">
        <div class="container">
            <div class="cont">
                <h2>Trending Now</h2>
                
                
<?php   
echo "<div class='pic' style='display: grid; grid-template-columns: auto auto auto auto;'>";
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");
  $result = mysqli_query($db, "SELECT * FROM recipes");
$c=0;
    while ($row = mysqli_fetch_array($result)) {
		$c++;
echo "<div class='item'>";
echo "<form  method='POST' action='rec12.php'>";
echo "<img src='recipes/".$row['img2']."'>";
echo "<div class='details1' style='padding:10%;'>";
echo "<input type='submit' value='".$row['name']."' style='border:none; background-color:white;' name='recName'>";
echo "</form>";
echo "</div>";
echo "</div>";
    }
  ?>
  
                    
                </div>


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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="js/recipes.js"></script>
</body>
</html>