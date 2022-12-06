<?php

$firstname = $_POST['name'];
$lastname= $_POST['lname'];
$a=10;

echo("<p>Welcome ". $a . $firstname . " " . $lastname . " </p");

?>

<?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>

  
echo "<div class='container-fluid'>";
echo "<div class='row' style='margin-top:2%; margin-left: 2%;'>";