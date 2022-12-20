
<?php
  // Create database connection
  $db=new mysqli('localhost','root','','qgym');

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$name = $_POST['recname'];
  	$imgI = $_FILES['ImgI']['name'];
  	$img1 = $_FILES['Img1']['name'];
  	$img2 = $_FILES['Img2']['name'];
  	$img3 = $_FILES['Img3']['name'];
	$prepT= $_POST['prepT'];
	$cookT= $_POST['cookT'];
	$step= $_POST['step'];
	$ingred= $_POST['ingred'];
  	// Get text
  //	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory

  	$sql = "INSERT INTO recipes (imgI,img1,img2,img3,prepT,cookT,step,ingred,name) VALUES ('$imgI','$img1','$img2','$img3','$prepT','$cookT','$step','$ingred','$name')";
  	// execute query
  	mysqli_query($db, $sql);
  }
  $result = mysqli_query($db, "SELECT * FROM recipes");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q GYM- Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/managerP.css">
    <link rel="stylesheet"  href="css/userhome.css"/>
    <link rel="stylesheet" href="css/edit.css">

    <script>
        
function performClick(elemId) {
    var elem = document.getElementById(elemId);
    if(elem && document.createEvent) {
        var evt = document.createEvent("MouseEvents");
        evt.initEvent("click", true, false);
        elem.dispatchEvent(evt);
    }
}
function design(x){
    document.getElementById(x).style.borderBottomColor ="#05324488";
}
function normal(x){
    document.getElementById(x).style.borderBottomColor ="#0fa8e488";
}
    </script>

<style type="text/css">
   #content{
   /*	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;*/
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
</style>
</head>

<body>
	        
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand ms-5" href="manager.php"><img src="img/01.10.2022_17.10.41_REC.png" height="50px" width= "100px" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto me-4 "><!--ms for left-->
              <li class="nav-item2 ms-4">
                <a class="nav-link btn btn-outline-info text-white"  href="logIn.html">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>


<div id="content">
  <div class="info" style="padding:3%; width:100%">
    <h2>Add Recipes:</h2>
    <form method="POST" action="managerR.php" enctype="multipart/form-data">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="recName" name="recname" onclick="design(id)" onmouseout="normal(id)" placeholder="Recipe Name">
                <label for="recName">Add Recipe Name</label>
            </div>

            <div class="form-floating mb-3">
                <h3 onclick="performClick('recImg')"style="font-size: 22px;">Add Main Recipes Image</h3>
                <input type="file" id="recImg" name="ImgI" />
            </div>

            <div class="form-floating mb-3">
                <h3 onclick="performClick('recImg1');"style="font-size: 22px;">Add sub Recipes Image</h3>
                <input type="file" id="recImg1" name="Img1" />
            </div>

            <div class="form-floating mb-3">
                <h3 onclick="performClick('recImg2');"style="font-size: 22px;">Add sub Recipes Image</h3>
                <input type="file" id="recImg2" name="Img2" />
            </div>

            <div class="form-floating mb-3">
                <h3 onclick="performClick('recImg3');" style="font-size: 22px;">Add sub Recipes Image</h3>
                <input type="file" id="recImg3" name="Img3" />
            </div>

            <div class="form-floating mb-3">
            <input type="text" class="form-control" id="recIng" name="ingred" onclick="design(id)" onmouseout="normal(id)" placeholder="Recipe Ingredients">
            <label for="recIng">Add Recipe Ingredients</label>
            </div>

            <div class="form-floating mb-3">
            <input type="text" class="form-control" id="recStep" name="step" onclick="design(id)" onmouseout="normal(id)" placeholder="Recipe Steps">
            <label for="recStep">Add Recipe Steps</label>
            </div>

            <div class="form-floating mb-3">
            <input type="number" class="form-control" id="perp" name="perpT" onclick="design(id)" onmouseout="normal(id)" placeholder="Prepare Time">
            <label for="perp">Add Recipe Prepare Time</label>
            </div>

            <div class="form-floating mb-3">
            <input type="number" class="form-control" id="cookT" name="cookT" onclick="design(id)" onmouseout="normal(id)" placeholder="cook Time">
            <label for="cookT">Add Recipe Cook Time</label>
            </div>
            <input type="submit" name="upload" class="btn btn-outline-info" value="ADD">
    </form>
  </div>

  <div class="info" style="width:100%; padding:13%;" >
        <h2>Delete Recipe:</h2>
		<form method="POST" action="managerR.php">
		<div class="form-floating mb-3" style="width:50%;">
            <input type="number" class="form-control" id="recId" name="id" onclick="design(id)" onmouseout="normal(id)" placeholder="Recipe ID">
            <label for="progId">Recipe ID to Delete</label>
            </div>
        <input type="submit" name="delete" class="btn btn-outline-info" value="DELETE">
        </div>
		</form>
</div>


  
     
<div class="header-cont" style="margin-left: 2%; display:grid; grid-template-columns: auto auto auto auto; " style="width:100%">
<?php
$c=0;
    while ($row = mysqli_fetch_array($result)) {
		$c++;
echo "<div class='col-lg-4'>";
echo "<div class='prog1image'>";
echo "<img src='recipes/".$row['img2']."' height='550px' style='border-radius:5%; width: 439px;'>";
echo "<div class='details1' style='padding:10%; height='550px; width: fit-content;'>";
echo "<p>Program ID:".$c."<br>"."</p>";
echo "</div>";
echo "</div>";
echo "</div>";
    }
  ?>

<?php
 $db=new mysqli('localhost','root','','qgym'); 
 // Initialize message variable
 $msg = "";
 // If upload button is clicked ...
 if (isset($_POST['delete'])) {
	$id=$_POST['id'];
	$result = mysqli_query($db, "SELECT * FROM recipes");
	$c=0;
		while ($row = mysqli_fetch_array($result)) {
			$name=$row['name'];
			$c++;
			if($c==$id){
				$sql = "DELETE FROM recipes WHERE name='" . $name . "'";
  	        // execute query
  	        mysqli_query($db, $sql);
			}
			else{
				echo"no done";
			}
		}

 }
?>
</div>
</body>
</html>