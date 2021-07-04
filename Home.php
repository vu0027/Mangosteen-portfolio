<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8ea3ef77b3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Css/styles.css">
    <title></title>
  </head>
  <body>

    <!-------- NAVBAR -------->
    <div style="height:10px; background:#ff9292;"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a href="#" class="navbar-brand">Ôm Em - Hug Me - 抱我</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarcollapseCMS">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id ="navbarcollapseCMS">


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
              <a href="Categories.php" class="nav-link">PROJECTs</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <button class="dropbtn">MINI GAMES
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="Comments.php" class="nav-link">HIGHLIGHT POST</a>
            </li>
            <li class="nav-item">
              <a href="AboutMe.php?page=1" class="nav-link">CONTACT ME</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="Logout.php" class="nav-link">Logout <i class="fas fa-sign-out-alt"></i></a></li>

          </ul>
        </div>
      </div>
    </nav>
    <div style="height:10px; background:#fcd1d1;"></div>
    <!-------- NAVBAR END -------->



    <!-------- HEADER  -------->
    <header class="bg-dark text-white py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><i class="fas fa-seedling" style="color:#ffe8e8;"></i> Lô Tô May Mắn của 4 người bạn rãnh háng mừng Xuân Tân Sửu 2021</h1>
          </div>
        </div>

      </div>

    </header>

    <!-------- HEADER END  -------->





    <!-------- FOOTER  -------->

    <div style="height:10px; background:#fcd1d1;"></div>
    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <p class="lead text-center">Anh Vu  |  <span id="year"></span> &copy;  ----All right Reserved</p>
        </div>
      </div>
    </footer>
    <div style="height:10px; background:#ff9292;"></div>



    <!-------- FOOTER END -------->










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script>
      document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>

  </body>
</html>
