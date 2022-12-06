
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
	
  	$image = $_FILES['Img']['name'];
	$day=$_POST['Day'];
	$tool=$_POST['Tools'];
	$type=$_POST['Type'];
	$link=$_POST['Link'];
  	// Get text
  //	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image,day,link,tools,type) VALUES ('$image','$day','$link','$tool','$type')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['Img']['tmp_name'], $target)) {
  		$msg = "prog uploaded successfully";
  	}else{
  		$msg = "Failed to upload prog";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
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
    <link rel="stylesheet" href="css/manager.css">
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
          <a class="navbar-brand ms-5" href="home.html"><img src="img/01.10.2022_17.10.41_REC.png" height="50px" width= "100px" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto me-4 "><!--ms for left-->
              <li class="nav-item ms-4">
                <a class="nav-link text-white" aria-current="page" href="manager.php">Home</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link text-white" aria-current="page" href="managerP.php">Programs</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link text-white" href="managerR.php">Recipes</a>
              </li>
              <li class="nav-item2 ms-4">
                <a class="nav-link btn btn-outline-info text-white"  href="logIn.html">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>


<div id="content">
  <div class="info" style="padding:7%; width:100%">
    <h2>Add Program:</h2>
    <form method="POST" action="managerP.php" enctype="multipart/form-data">
  	
	
	  <div class="form-floating mb-3">
            <input type="url" class="form-control" id="progLink" name="Link" onclick="design(id)" onmouseout="normal(id)" placeholder="Program Link">
            <label for="progLink">Add Program Link</label>
            </div>

            <div class="form-floating mb-3">
                <h3 onclick="performClick('progImg',);">Add Program Image</h3>
                <input type="file" id="progImg" name="Img" />
            </div>

            <div class="form-floating mb-3">
            <input type="number" class="form-control" id="progDay" name="Day" onclick="design(id)" onmouseout="normal(id)" placeholder="Program Days">
            <label for="progDay">Add Program Days</label>
            </div>

            <div class="form-floating mb-3">
            <input type="text" class="form-control" id="progTools" name="Tools" onclick="design(id)" onmouseout="normal(id)" placeholder="Program Tools">
            <label for="progTools">Add Program Tools</label>
            </div>

            <div class="form-floating mb-3">
            <input type="text" class="form-control" id="progType" name="Type" onclick="design(id)" onmouseout="normal(id)" placeholder="Program Type">
            <label for="progType">Add Program Type</label>
            </div>
            <input type="submit" name="upload" class="btn btn-outline-info" value="ADD">
    </form>
  </div>

  <div class="info" style="width:100%">
        <h2>Delete Program:</h2>
		<form method="POST" action="managerP.php">
		<div class="form-floating mb-3" style="width:50%;">
            <input type="number" class="form-control" id="progId" name="id" onclick="design(id)" onmouseout="normal(id)" placeholder="Program ID">
            <label for="progId">Program ID to Delete</label>
            </div>
        <input type="submit" name="delete" class="btn btn-outline-info" value="DELETE">
        </div>
		</form>
</div>


     
<div class="header-cont" style="margin-left: 2%; display:grid; grid-template-columns: auto auto auto auto;gap: 10px;" style="width:100%">
<?php
$c=0;
    while ($row = mysqli_fetch_array($result)) {
		$c++;
echo "<div class='col-lg-4'>";
echo "<div class='prog1image'>";
echo "<img src='images/".$row['image']."' height='550px' style='border-radius:5%;'>";
echo "<div class='details1' style='padding:10%;'>";
echo "<p>Program ID:".$c."<br>"."</p>";
echo "<div class='day' style='padding:1% 3% 6%;border-radius:36px;margin-top: 2%; margin-left: 3%; background-color:rgb(192, 211, 228); height: 10px; width:100px;'><p><i class='fa-solid fa-business-time'></i>".$row['day']."Day</p>";
echo "</div>";
echo "<div class='text'>"."<p>Type:".$row['type']."<br>"."Equipment: ".$row['tools']."</p>"."</div>";
echo "</div>";
echo "</div>";
echo "</div>";
    }
  ?>

<?php
 $db = mysqli_connect("localhost", "root", "", "image_upload"); 
 // Initialize message variable
 $msg = "";
 // If upload button is clicked ...
 if (isset($_POST['delete'])) {
	$id=$_POST['id'];
	$result = mysqli_query($db, "SELECT * FROM images");
	$c=0;
		while ($row = mysqli_fetch_array($result)) {
			$img=$row['image'];
			$c++;
			if($c==$id){
				$sql = "DELETE FROM images WHERE image='" . $img . "'";
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