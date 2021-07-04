<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<?php
if(isset($_POST["Submit"])){
  $Category = $_POST["CategoryTitle"];
  $Admin = "anhvucs";
  date_default_timezone_set("America/Chicago");
  $CurrentTime = time();
  //$DateTime = strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
  $DateTime = strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);

  if(empty($Category)) {
    $_SESSION["ErrorMessage"]= "The title is required!";
    Redirect_to("Categories.php");
  }
  elseif(strlen($Category) < 2){
    $_SESSION["ErrorMessage"]= "At least length of 2 is required!";
    Redirect_to("Categories.php");
  }
  elseif(strlen($Category) > 49){
    $_SESSION["ErrorMessage"]= "Maximum length is 50!";
    Redirect_to("Categories.php");
  }
  else {
    // Query to insert category in DB when everything works properly
    $sql = "INSERT INTO category(title, author, datetime)";
    $sql .= "VALUE(:categoryName,:adminName,:datetime)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':categoryName', $Category);
    $stmt->bindValue(':adminName', $Admin);
    $stmt->bindValue(':datetime', $DateTime);
    $Execute=$stmt->execute();

    if($Execute) {
      $_SESSION["SuccessMessage"] = "Category is added successfully";
      Redirect_to("Basic.html");
    }
  }

}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8ea3ef77b3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Css/styles.css">
    <link rel="stylesheet" href="Css/ContactMe.css">
    <title></title>
  </head>
  <body>

    <!-------- NAVBAR -------->
    <nav class="navbar navbar-expand-lg navbar-custom navbar-light" style=" border: 7px dashed #fcd1d1;">
      <div class="container">
        <img alt="School was fun." src="Images/mangosteen_icon.png" style="max-width: 30%; padding-right:1%;">
        <a href="Home.php" class="navbar-brand"><h3>Mangosteen</h3></a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarcollapseCMS">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id ="navbarcollapseCMS"  style="padding-left:15%;">


          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a href="AboutMe.php" class="nav-link"><i class="fas fa-user-circle"></i> MY PROFILE</a>

            </li>
            <li class="nav-item">
              <a href="Dashboard.php" class="nav-link">DASHBOARD</a>
            </li>
            <li class="nav-item">
              <a href="Posts.php" class="nav-link">POSTS</a>
            </li>
            <li class="nav-item">
              <a href="Categories.php" class="nav-link">PROJECTS</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">MINI GAMES</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="LotoTet.php?page=1">BINGO</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </li>


            <li class="nav-item">
              <a href="Comments.php" class="nav-link">HIGHLIGHT POST</a>
            </li>
            <li class="nav-item">
              <a href="ContactMe.php?page=1" class="nav-link">CONTACT ME</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="Logout.php" class="nav-link">Logout <i class="fas fa-sign-out-alt"></i></a></li>

          </ul>
        </div>
      </div>
      <form class="form-inline">
       <input class="form-control mr-sm-2 center" type="search" placeholder="Search" aria-label="Search" style="width:70%;">
      </form>

    </nav>
    <!-------- NAVBAR END -------->



    <!-------- HEADER  -------->
    <header class="bg-dark text-white py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2><i class="fas fa-seedling" style="color:#ffe8e8;"></i> Add Something</h2>
          </div>
        </div>

      </div>

    </header>

    <!-------- HEADER END  -------->


    <!-----MAIN AREA------>
    <section class ="container py-1 mb-1">
        <div class="row" style="min-height:30px;">
          <div class="offset-sm-1 col-sm-10">

            <?php
              echo ErrorMessage();
              echo SuccessMessage();
            ?>
            <form class="" action="Categories.php" method="post">
              <div class="card bg-secondary text-light mb-1">
                <div class="card-header">
                  <h3>Add New Categories</h3>

                </div>

                <div class="card-body bg-dark">
                  <div class="form-group">
                    <label for="title"><span class="FieldInfo">Category Title: </span></label>
                    <input class="form-control"type="text" name="CategoryTitle" placeholder="Type here" id="title" value="">

                  </div>
                  <div class="row " style="min-height:50px;">
                    <div class="col-lg-6 mb-2 mt-4 text-center">
                      <a href="Dashboard.php" class="btn btn-warning btn-sm"><i class="fas fa-arrow-left" style="color:white;"></i> Back</a>
                    </div>
                    <div class="col-lg-6 mb-2 mt-4 text-center">
                      <button type="submit" name="Submit" class="btn btn-success btn-sm">
                        <i class="fas fa-check" style="color:white;"></i> Publish
                      </button>
                    </div>
                  </div>

                </div>

              </div>

            </form>
          </div>
        </div>
    </section>



    <!-----MAIN AREA END------>

    <!-------- FOOTER  -------->

    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <p class="lead text-center">Anh Vu  |  <span id="year"></span> &copy;  ----All right Reserved</p>
        </div>
      </div>
    </footer>
    <div style="height:10px; background:#fcd1d1;"></div>



    <!-------- FOOTER END -------->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script>
      document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>

  </body>
</html>
