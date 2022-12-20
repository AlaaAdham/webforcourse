<?php
   
    if((isset(($_POST['user']))&&isset($_POST['email'])&&isset($_POST['pass'])&&isset($_POST['conf'])&&isset($_POST['phone'])))
    { $txtname=$_POST['user'];
    $txtemail=$_POST['email'];
    $txtpass=$_POST['pass'];
    $txtconf=$_POST['conf'];
    $txtphone=$_POST['phone'];
    
    try{

        $db=new mysqli('localhost','root','','qgym');
        $str="SELECT * FROM `Clients`";
        $res=$db->query($str);
        for($i=0;$i<$res->num_rows;$i++)
        {
            $row=$res->fetch_object();
            if(empty($txtname)||empty($txtemail)||empty($txtpass)||empty($txtconf)||empty($txtphone))
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
          <strong class="font__weight-semibold">TRY Again!</strong>check you have enter all information.
        </div>
      </div>
               <?php
               
              break;
            
            }
            else
            {
            if(strlen($_POST['pass'])< 8)
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
          <strong class="font__weight-semibold">TRY Again!</strong>Your password is too easy to Know try another one.
        </div>
      </div>
               <?php
               break;
            }
            if($row->Email==$txtemail)
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
        <strong class="font__weight-semibold">TRY Again!</strong>This Email is already Used.
      </div>
    </div>
             <?php
             break;
            }
            
            
            if(!preg_match("/^[A-Za-z][A-Za-z0-9_]{7,29}$/",$txtname))
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
        <strong class="font__weight-semibold"> another UserName!</strong>Username shouldn't start  with number,underscore is valid 
      </div>
    </div>
             <?php
             
             break;
            }
            if(!preg_match("/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/",$txtphone))
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
          <strong class="font__weight-semibold">TRY Again!</strong>YourPhone Number is invalid
        </div>
      </div>
               <?php
               
               break;
            }

           else if(($row->UserName!=$txtname)&&($txtconf==$txtpass)&&($row->Email!=$txtemail)&&($row->phoneNum!=$txtphone))
            {
              
                $sql="INSERT INTO `Clients` (`UserName`, `Email`, `Password`, `phoneNum`,`img`) VALUES ('".$txtname."','".$txtemail."',SHA1('".$txtpass."'), '".$txtphone."','blank-profile-picture-973460__340.webp')";
                $res=$db->query($sql);
                $db->commit();
                header('Location:loginn.php');
        
            }
            else{  
               ?>
                <div class="col-sm-12" style="margin-top:4% ;">
        <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
         
									<span aria-hidden="true">
										<i class="fa fa-times danger "></i>
									</span>
									<span class="sr-only">Close</span>
								</button>
          <i class="start-icon far fa-times-circle faa-pulse animated"></i>
          <strong class="font__weight-semibold">TRY Again!</strong>
        </div>
      </div>
               <?php
               
               break;
            }
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
    <strong class="font__weight-semibold">This User Name is invalid!</strong>Try another User Name .
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
    <title>Q GYM- Sign Up </title>
    
    <link rel="icon" href="img/305395332_109595768554474_4676013947783116272_n.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/signup.css">

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

    
<nav  class="navbar navbar-expand-lg navbar-light fixed-top ">
    <div class="container-fluid">
      <a class="navbar-brand ms-5" href="home.php"><img src="img/01.10.2022_17.10.41_REC.png" height="50px"
          width="100px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto me-4 ">
          <!--ms for left-->
          <li class="nav-item ms-4">
            <a class="nav-link text-white" aria-current="page" href="home.php">Home</a>
          </li>
          
          <li class="nav-item ms-4">
            <a class="nav-link text-white " href="home.php#aboutss">About US</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link text-white " href="recipes.html">Recipes</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link text-white " href="#foot">Contact Us</a>
          </li>
          <li class="nav-item2 ms-4">
            <a class="nav-link btn btn-outline-info text-white" href="logInn.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <header class="header">
        <div class="overlay">
            <form class="container" action="signup.php" method="post">
                <div class="cont">
                <div class="info">
                    <h2>Please Enter Your Information</h2>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" onclick="design(id)" onmouseout="normal(id)" placeholder="username" name="user">
                    <label for="username">User Name</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" onclick="design(id)" onmouseout="normal(id)" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="Password" name="pass" onclick="design(id)" onmouseout="normal(id)" placeholder="Password">
                    <label for="Password">Password</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="conPassword" name="conf" onclick="design(id)" onmouseout="normal(id)" placeholder="conPassword">
                    <label for="conPassword">Confirm Password</label>
                    <p id="sp1"></p>
    
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phonenum" onclick="design(id)" name="phone" onmouseout="normal(id)" placeholder="phonenum">
                    <label for="phonenum">Phone Number</label>
                    </div>

                    
               <input type="submit" value="signup" class="btn btn-outline-info" >
                

                </div>

                <div class="other-cont">
                    <img src="img/Instagram-feed-template-with-transparent-background-Vector-PNG.png" class="insta" alt="">
                    <img src="img/5eba4fd25cc9520f45077188_textimage1.jpg" class="pic" alt="">
                </div>
            </div>
            </form>
        </div>
    </header>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="js/signup.js"></script>
</body>
</html>