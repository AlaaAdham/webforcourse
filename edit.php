<?php
session_start();
$var_value=$_SESSION['username'];
if((!isset($_POST['fieldname'])|| ($_POST['fieldname']==''))||(!isset($_POST['fieldpass'])&&($_POST['fieldconf'])))
{
?>
<h1>error</h1>
<?php
}
else
{
 if(isset($_POST['fieldname']))
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


if(isset($_POST['fieldpass'])&&($_POST['fieldconf']))
{
  $pass=$_POST['fieldpass'];
  $conf=$_POST['fieldconf'];
  try{
    if($pass==$conf)
    {
  $db=new mysqli('localhost','root','','qgym');
    $str="SELECT * FROM `Clients`";
    $res=$db->query($str);
    for($i=0;$i<$res->num_rows;$i++)
    {
        $row=$res->fetch_object();
        if($row->UserName==$var_value)
        {
          $sql = "UPDATE Clients SET Password=SHA1('$pass') WHERE UserName='$var_value'";
          $res=$db->query($sql);
          }
          }
        }
        if($pass!=$conf)
        {
        ?>
        <h1 style="color:aqua;">unconform pass</h1>
        <?php
      }
    }
  catch(Exception $e)
  {
  }
}
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
    
    <div class="header">
        <form class="container" action="edit.php" method="POST">
            <div class="cont">
                <div class="info">
                    <h2>Edit Your Personal Info</h2>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" onclick="design(id)" onmouseout="normal(id)" placeholder="username" name="fieldname">
                    <label for="username">User Name</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="Password" onclick="design(id)" onmouseout="normal(id)" placeholder="Password" name="fieldpass">
                    <label for="Password">New Password</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="conPassword" onclick="design(id)" onmouseout="normal(id)" placeholder="conPassword" name="fieldconf">
                    <label for="conPassword">Confirm Your New Password</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phonenum" onclick="design(id)" onmouseout="normal(id)" placeholder="phonenum" name="fieldphone">
                    <label for="phonenum">Phone Number</label>
                  
                    </div>

                    
                <input type="submit" value="submit" name="sub1">
                

                </div>
                <div class="other-cont">
                    <img src="img/لبتول.png" id="profile-img" alt="">
                    <div class="edit">
                        <h3 onclick="performClick('theFile',);">Change Your Photo</h3>
                        <input type="file" id="theFile" style="opacity: 0;"/>
                        <h3 onclick="resetImg()">Remove Your Photo</h3>
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