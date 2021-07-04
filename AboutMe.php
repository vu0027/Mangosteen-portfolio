<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="Images/mangosteen_icon.png" type="image/gif" sizes="16x16">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/8ea3ef77b3.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="Css/styles.css">

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
              <a href="Home.php" class="nav-link">DASHBOARD</a>
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
      <header class="bg-dark text-white py-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2><i class="fas fa-seedling" style="color:#ffe8e8;"></i> About Me</h2>
          </div>
        </div>

      </div>

    </header>

    <!-------- HEADER END  -------->


    <!-----MAIN AREA------>
    <section class ="container py-1 mb-1">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Objective</a>
        <a class="nav-item nav-link" id="nav-education-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-education" aria-selected="false">Education</a>
        <a class="nav-item nav-link" id="nav-exprience-tab" data-toggle="tab" href="#nav-exprience" role="tab" aria-controls="nav-exprience" aria-selected="false">Experiences</a>
        <a class="nav-item nav-link" id="nav-projects-tab" data-toggle="tab" href="#nav-projects" role="tab" aria-controls="nav-projects" aria-selected="false">Projects</a>
        <a class="nav-item nav-link" id="nav-interests-tab" data-toggle="tab" href="#nav-interests" role="tab" aria-controls="nav-interests" aria-selected="false">Interests</a>

      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent" style="padding-top: 5%;">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <img alt="Hey You! Yes, you. I am Anh." src="Images/myFace.jpg" class="center">
        <p class="p-big">Thank you for curious about me. I am also very curious about you.</br> My name is Anh Vu. I am a person who has a passion for many things and I always try hard for my passion in many ways.</p-big>
      </div>

      <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
        <img alt="School was fun." src="Images/graduate.jpg"  class="center" style="max-width: 30%;">
        <p styles="text-align:center;">I graduated from The University of Oklahoma in 2021 with a Bachelor's Degree in Computer Science. </br>My GPA is 3.9.</p>
      </div>

      <div class="tab-pane fade" id="nav-exprience" role="tabpanel" aria-labelledby="nav-exprience-tab">
        <h4>Software Development Intern</h4>
<p><b>Intelek Technologies June 2019 - March 2020</b></br>
• Collaborated with the team to design, structure, and implement new websites from
start to finish; updated existing websites using VB.NET, C# MVC, Web API.</br>
• Styled content and website layout for the user experience using CSS and HTML.</br>
• Used the software to extract desired data from a given URL and apply web scraping.</p>
      </div>

      <div class="tab-pane fade" id="nav-projects" role="tabpanel" aria-labelledby="nav-projects-tab" style="text-align: left;">
        <p style="text-align: left;">- This website will be the first project I want to introduce. It is a PHP, JS, HTML, CSS project that I have a lot of fun with.</br></p>
        <p style="text-align: left;"><a href="project2.php">Project 2</a> </br></p>

      </div>
      <div class="tab-pane fade" id="nav-interests" role="tabpanel" aria-labelledby="nav-interests-tab">
        <p>Beside the interest about coding related. I also love cooking a lot. My dream is to open a tea cafe place where I can show other things that I want to do - cooking and business. Keep update my page, maybe you can see it one day.</p>

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









    <script>
      document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>

  </body>
</html>
