<?php
session_start();
if(isset($_POST['password'])&&($_POST['password'])&&($_POST['sub']))
{$name=$_POST['username'];
    $txtpass=$_POST['password'];
    try{
        $db=new mysqli('localhost','root','','qgym');
        $str="SELECT * FROM `Clients`";
        $res=$db->query($str);
        for($i=0;$i<$res->num_rows;$i++)
        {
            $row=$res->fetch_object();
            if(($row->UserName==$name) && ($row->Password==SHA1($txtpass)))
            {
              $_SESSION['username'] = $name;
              header('Location:userhome.html');
            
            }
        else{
              ?>
              <h1 style="color:gold; font-size:40px;">Error</h1>
              
              <?php
            
            }

        }
        $db->close();

    }
    catch(Exception $e)
    { 
      ?>
      <h1 style="color:blue; font-size:40px;">Error</h1>
      
      <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q GYM- Log In</title>
    <link rel="icon" href="img/305395332_109595768554474_4676013947783116272_n.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/logIn.css">
</head>
<body>
  <!--
    <header class="header">
        <div class="overlay">
            <div class="container">

            <div class="prices row">
                <div class="offer col">
                    <h2>Standard</h2>
                    <h3>$30.00</h3>
                    <p> Beginers</p>

                    <div class="list_fet">
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> One Month</li>
                        </ul>
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> 3 lessons per week</li>
                        </ul>
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> 12 hour per month </li>
                        </ul>
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> Personal Trainer assist</li>
                        </ul>
                    </div>

                    <button> Subscribe Now</button>
                </div>
                <div class="offer col">
                    <h2>Fit Plus</h2>
                    <h3>$60.00</h3>
                    <p>Most popular</p>

                    <div class="list_fet">
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> Three Month</li>
                        </ul>
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> 6 lessons per week</li>
                        </ul>
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> 24 hour per month </li>
                        </ul>
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> Personal Trainer assist</li>
                        </ul>
                    </div>

                    <button> Subscribe Now</button>

                </div>
                <div class="offer col">
                    <h2>Goals</h2>
                    <h3>$100.00</h3>
                    <p>Best deal</p>

                    <div class="list_fet">
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> Six Month</li>
                        </ul>
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> 6 lessons per week</li>
                        </ul>
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> 24 hour per month </li>
                        </ul>
                        <ul class="list">
                            <li class="list_item"> <i class="fa-solid fa-check"></i> Personal Trainer assist</li>
                        </ul>
                    </div>

                    <button> Subscribe Now</button>

                </div>
            </div>

            </div>
        </div>
    </header>
  -->
    
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
              <a class="nav-link text-white " href="#">About US</a>
            </li>
            <li class="nav-item ms-4">
              <a class="nav-link text-white " href="recipes.html">Recipes</a>
            </li>
            <li class="nav-item ms-4">
              <a class="nav-link text-white " href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="header">
      <div class="overlay">
        <form class="container" action="loginn.php" method="post">
          <div class="cont" >
            <div class="info">
                <h2>Let's Get started!!</h2>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" onclick="design(id)" onmouseout="normal(id)" placeholder="username" name="username">
                <label for="username">User Name</label>
                </div>

                <div class="form-floating mb-3">
                <input type="password" class="form-control" id="Password" onclick="design(id)" onmouseout="normal(id)" placeholder="Password" name="password">
                <label for="Password">Password</label>
                </div>

                <div class="bt">
                <span style="color:red" id="gogo">تت</span>
                <input type="submit" value="login" class="btn btn-outline-info" name="sub">
                
                </div>
                
            </div>

            <div class="other-cont">
            </div>

          </div>
          
          
        </form>
      </div>
    
    </header>
   
    <footer>
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

    <script src="js/login.js"></script>
    
</body>
</html>