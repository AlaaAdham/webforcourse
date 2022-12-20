<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$var_value=$_SESSION['username'];

 if(isset($_POST['fieldname']))
  {
if(!empty($_POST['fieldname']))
{
if(!preg_match("/^[A-Za-z][A-Za-z0-9_]{7,29}$/",$_POST['fieldname']))
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
}
else
{
  $name=$_POST['fieldname'];
  try{
    
    {
      $db=new mysqli('localhost','root','','qgym');
    $str="SELECT * FROM `Clients`";
    $res=$db->query($str);
    for($i=0;$i<$res->num_rows;$i++)
    {
        $row=$res->fetch_object();
        if($row->UserName==$var_value)
        { 

           if($name==$row->UserName)
           {
             echo "this username is not valid";
           }
            
          
          else
          {
          $sql = "UPDATE Clients SET UserName='$name' WHERE UserName='$var_value'";
          $res=$db->query($sql);
          $_SESSION['username']=$name;
          }

          }
      }
    
    }
  }

  catch(Exception $e)
  {

  }
}
 }
}

if(isset($_POST['fieldpass']))
 { 

   if(!empty($_POST['fieldpass']))
   {
    
   if(strlen($_POST['fieldpass'])< 8)
            {
              ?>
                <div class="col-sm-12" style="margin-top:5% ;">
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
            }
            else
            {
               try{
                $pass=$_POST['fieldpass'];
   $db1=new mysqli('localhost','root','','qgym');
     $str1="SELECT * FROM `Clients`";
     $res1=$db1->query($str1);
     for($i=0;$i< $res1->num_rows;$i++)
     {
         $row1=$res1->fetch_object();
         if($row1->UserName==$var_value)
         {
           $sql1= "UPDATE Clients SET Password=SHA1('$pass') WHERE UserName='$var_value'";
           $res1=$db1->query($sql1);
           }
           }
          }
   catch(Exception $e)
   {
     echo"error";
   }
 }
}
 }
 
 if(isset($_POST['fieldphone']))
 {
  if(!empty($_POST['fieldphone']))
  {
  if(!preg_match("/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/",$_POST['fieldphone']))
  {

    ?>
     <div class="col-sm-12" style="margin-top:5% ;">
        <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
         
									<span aria-hidden="true">
										<i class="fa fa-times danger "></i>
									</span>
									<span class="sr-only">Close</span>
								</button>
          <i class="start-icon far fa-times-circle faa-pulse animated"></i>
          <strong class="font__weight-semibold">Try Again! enter valid phone number</strong>
        </div>
      </div>
    <?php
  }
  else
  {
  $pnum=$_POST['fieldphone'];
  
  try{
    $db1=new mysqli('localhost','root','','qgym');
      $str1="SELECT * FROM `Clients`";
      $res1=$db1->query($str1);
      for($i=0;$i< $res1->num_rows;$i++)
      {
          $row1=$res1->fetch_object();
          if($row1->UserName==$var_value)
         {
           $sql1= "UPDATE Clients SET phoneNum=$pnum WHERE UserName='$var_value'";
           $res1=$db1->query($sql1);
           }
      }
    }
    catch(Exception $e)
   {
   }
}
}
 }

?>
<?php
  $db = mysqli_connect("localhost", "root", "", "qgym");
  if (isset($_POST['change'])) {
    $img = $_FILES['Img']['name'];
    if(isset($img)){
          $sql = "UPDATE clients SET img='$img'  WHERE UserName='$var_value'";
              // execute query
                  mysqli_query($db, $sql);
            }
            else{
              echo"fdf";
            }
      } 
      if (isset($_POST['remove'])) {
              $sql = "UPDATE clients SET img='blank-profile-picture-973460__340.webp'  WHERE UserName='$var_value'";
                  // execute query
                  mysqli_query($db, $sql);
          }
        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q GYM</title>
    <link rel="icon" href="img/305395332_109595768554474_4676013947783116272_n.jpg"/>
    <link rel="icon" href="img/305395332_109595768554474_4676013947783116272_n.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/edit.css">
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
        <div class="secnav ms-3">
        <?php
  $db = mysqli_connect("localhost", "root", "", "qgym");
  $result = mysqli_query($db, "SELECT * FROM Clients WHERE UserName='$var_value'");
     $c=0;
         while ($row = mysqli_fetch_array($result)) {
             $c++;
             echo"<a class='nav-link text-white' href='home.html' id='user-name'>".$row['UserName']."</a>";
             echo"<a class='nav-link text-white' href='profile.php' id='profile-img' ><img src='img/".$row['img']."' alt=''></a>";
         }
       ?>
        </div>
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
    
    <div class="header">
        <form class="container" action="edit.php" method="POST">
            <div class="cont">
                <div class="info">
                    <h2>Edit Your Personal Info</h2>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control"  id="u" onclick="design(id)" onmouseout="normal(id)" placeholder="username" name="fieldname">
                    <label for="username">User Name</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="p" onclick="design(id)" onmouseout="normal(id)" placeholder="Password" name="fieldpass">
                    <label for="Password">New Password</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="pn" onclick="design(id)" onmouseout="normal(id)" placeholder="phonenum" name="fieldphone">
                    <label for="phonenum">Phone Number</label>
                  
                    </div>

                    
                <input type="submit" value="submit" name="sub1" class="btn btn-light">
                      </form>
                

                </div>
                <div class="other-cont">

                    <div class="edit">
                      <form method="POST" action="edit.php" enctype="multipart/form-data">
                      <?php
  $db = mysqli_connect("localhost", "root", "", "qgym");

  $result = mysqli_query($db, "SELECT * FROM clients WHERE UserName='$var_value'");
     $c=0;
         while ($row = mysqli_fetch_array($result)) {
             $c++;
             echo"<img src='img/".$row['img']."' id='profile-img' alt=''>";
             }
       ?>
                <div class="ptn" style="margin-top: 2%; display:flex; flex-direction: column;">
                <input type="file" name="Img" id="img">
                <input type="submit" name="change" style="margin-bottom:2%; margin-top: 2%; color: #414141; font-size: 20px; border: 2px solid #414141; border-radius: 25px; padding: 2%; transition: .3s ease;" value="Change Your Image">

                <input type="submit" name="remove" style=" color: #414141; font-size: 20px; border: 2px solid #414141; border-radius: 25px; padding: 2%; transition: .3s ease;" value="Remove Your Image">
                </div>
                    </div>
                </div>

</form>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
    <script src="js/edit.js"></script>
    
</body>
</html>