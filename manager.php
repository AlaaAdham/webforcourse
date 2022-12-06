<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q GYM- Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/manager.css">

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

    <header style=" background-image: url(img/Coach_Rower_High_Five_Happy_compressed.jpg); background-position: center; background-size: cover; position: relative; width: 100%; height: 100vh; margin-top: 5%;">
</header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    


</body>
</html>