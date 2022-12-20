<?php
session_start();
if(isset($_POST['password'])&&($_POST['password'])&&($_POST['sub']))
{$passmanager=sha1('0569380317');
$name=$_POST['username'];
$txtpass=$_POST['password'];
    try{
        $db=new mysqli('localhost','root','','qgym');
        $str="SELECT * FROM Clients";
        $res=$db->query($str);
        for($i=0;$i<$res->num_rows;$i++)
        {
            $row=$res->fetch_object();
            if($row->UserName=='AlaaM' && $row->Password==$passmanager)
            {
              header('Location:manager.php');
            }
            else if(($row->UserName==$name && $row->Password==SHA1($txtpass)))
            {
              $_SESSION['username'] = $name;
              header('Location:home2.php');
            break;
            }
           

        }
        $db->close();

    }
    catch(Exception $e)
    { 
      ?>
      
              <div class="col-sm-12" style="margin-top:4% ;">
      <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
       
                <span aria-hidden="true">
                  <i class="fa fa-times danger "></i>
                </span>
                <span class="sr-only">Close</span>
              </button>
        <i class="start-icon far fa-times-circle faa-pulse animated"></i>
        <strong class="font__weight-semibold">ERROR</strong>
      </div>
    </div>
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
    <style>
      .alert-simple.alert-danger
{
  border: 1px solid rgba(241, 6, 6, 0.81);
    background-color: rgba(220, 17, 1, 0.16);
    box-shadow: 0px 0px 2px #ff0303;
    color: #ff0303;
   
  transition:0.5s;
  cursor:pointer;
}

.alert-danger:hover
{
     background-color: rgba(220, 17, 1, 0.33);
  transition:0.5s;
}

.danger
{
      font-size: 18px;
    color: #ff0303;
    text-shadow: none;
}

    </style>
</head>
<body>
 
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand ms-5" href="home.php"><img src="img/01.10.2022_17.10.41_REC.png" height="50px" width= "100px" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto me-4 "><!--ms for left-->
            <li class="nav-item ms-4">
              <a class="nav-link text-white" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item ms-4">
              <a class="nav-link text-white " href="home.php#aboutss">About US</a>
            </li>
            <li class="nav-item ms-4">
              <a class="nav-link text-white " href="recipes.php">Recipes</a>
            </li>
            <li class="nav-item ms-4">
              <a class="nav-link text-white " href="home.php#foot">Contact Us</a>
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