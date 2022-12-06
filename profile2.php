
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
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand ms-5" href="home.html"><img src="img/01.10.2022_17.10.41_REC.png" height="50px"
          width="100px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto me-4 ">
          <!--ms for left-->
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
      <div class="secnav ms-3"><?php
session_start();
$var_value=$_SESSION['username'];
if(!isset($_POST['fieldname'])|| trim($_POST['fieldname']) == '')
{
  ?>
  <script>confirm('nulllll');</script>
  <?php
}
else if(isset($_POST['fieldname']))
{
  $name=$_POST['fieldname'];
  try{
      $db=new mysqli('localhost','root','','qgym');
    $str="SELECT * FROM `Clients`";
    $res=$db->query($str);
    for($i=0;$i<$res->num_rows;$i++)
    {
        $row=$res->fetch_object();
        if($row->UserName==$var_value)
        {
          echo "<a class='nav-link text-white' href='' id='user-name'>.$row['img'].</a>";
          echo "<a class='nav-link text-white' href="" id='profile-img' onclick='resetImg()''><img src='img/cbe70db0-7b75-11ec-bd34-8df8eb963cc7.png' alt=''></a>";
          $_SESSION['username']=$name;
          }
      }
    }
  catch(Exception $e)
  {
  }
}
?>
      </div>
    </div>
  </nav>

  <header>
    <div class="container">
      <div class="cont">
        <div class="prof-info">
          <img src="img/cbe70db0-7b75-11ec-bd34-8df8eb963cc7.png" alt="">
          <h2> Batool Alaa</h2>
        </div>
        <div class="side">
          <div class="edit">
            <a href="edit.html">
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
      <div class="cont">
        <h2>Started Program</h2>
        <div class="prog">
          <div class="item">
            <a href="rec1.html"><img src="img/southwestern-stuffed-sweet-potatoes-1664306627961-cover.webp" alt=""></a>
          </div>
          <div class="item">
            <a href="rec1.html"><img src="img/southwestern-stuffed-sweet-potatoes-1664306627961-cover.webp" alt=""></a>
          </div>
          <div class="item">
            <a href="rec1.html"><img src="img/southwestern-stuffed-sweet-potatoes-1664306627961-cover.webp" alt=""></a>
          </div>

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