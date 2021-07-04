<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <style>

    .a {
      background-image: url('Images/hoamaitet.jpg');

    }


    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8ea3ef77b3.js" crossorigin="anonymous"></script>


    <link rel="stylesheet"  href="Css/styles.css">
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
    <header class="bg-dark text-white py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><i class="fas fa-seedling" style="color:#ffe8e8;"></i> Bingo Dice</h2>
        </div>
      </div>

    </div>

  </header>
    <!-------- HEADER END  -------->


    <!---- MAIN AREA ---->
    <div class="a">
    <p class="p-big">Go to  <a target="_blank" rel="noopener noreferrer"  href="http://mangosteen.epizy.com/BingoNumber.php">this</a> for a Bingo card</p>
    <?php
      // create an array random to store all random number from 1-90
    	$arr = array();
    	for ($i = 1; $i < 91; $i++) {
    		 $arr[$i] = $i;
        }
      	shuffle($arr);
    ?>


    <button onclick="eachNumber()" type="button" class="btn btn-warning" style="margin:30px;">Next Number</button>
    <button onclick="printnumbers()" type="button" class="btn btn-danger" style="margin:30px;">All Number</button>
    <div>
    <div  align="center" id='eachNumber' style="color:red; font-size: 190px; font-weight: bold; text-shadow: 5px 5px black; "></div>
    <!---
    <div  align="right" style="float: right;  border:2px black solid; font-size:30px; width:fit-content; width:-webkit-fit-content; width:-moz-fit-content;padding: 2%; text-align: center; border-style: solid; background: #fff;">


      <h3>Đợi</h3>
      <span style="color:green; font-size: 2rem;">Thi</span>
      <button onclick="up1()" class="controlButton">+</button>
      <span id="result1"></span>
      <button class="controlButton" onclick="down1()">-</button>
      <br>
      <span style="color:green; font-size: 2rem;">Anh</span>
      <button onclick="up2()" class="controlButton">+</button>
      <span id="result2"></span>
      <button class="controlButton" onclick="down2()">-</button>
      <br>
      <span style="color:green; font-size: 2rem;">Tú</span>
      <button onclick="up3()" class="controlButton">+</button>
      <span id="result3"></span>
      <button class="controlButton" onclick="down3()">-</button>
      <br>
      <span style="color:green; font-size: 2rem;">Nhi</span>
      <button onclick="up4()" class="controlButton">+</button>
      <span id="result4"></span>
      <button class="controlButton" onclick="down4()">-</button>

    </div>
  -->
  </div>
  <div id="listOfNumbers" align="center" style="margin-left: 2%; color:black; font-size: 30px; font-weight: bold; border:2px black solid; font-size:30px; width:fit-content; width:-webkit-fit-content; width:-moz-fit-content; border-style: solid; background: #fff;"></div>

    <script>
      // Print each random number in the array
       var randomNumbers = <?php echo json_encode($arr); ?>;
       count=0;
       var arrNum=[];
       function eachNumber(){
         arrNum.push(randomNumbers[count]);

          document.getElementById('eachNumber').innerHTML = randomNumbers[count];
          count++;

          if (count>randomNumbers.length){
             document.getElementById('eachNumber').innerHTML = 'Hết Số!';
             count=0;
           }
       }

       // Print List of Numbers
      function printnumbers(){

         arrNum.forEach(function(el){
         document.getElementById('listOfNumbers').innerHTML+=' ' +el;

       })
       document.getElementById('listOfNumbers').innerHTML+='<br>'
    }

    // Count increase decrease Numbers
    var score1 = 0;
    var score2 = 0;
    var score3 = 0;
    var score4 = 0;

    function up1(){
      score1 ++;
      document.getElementById("result1").innerHTML = score1;
    }

    function down1(){
      if(score1 != 0 ){
        score1 --;
      }
      document.getElementById("result1").innerHTML = score1;
    }

    function up2(){
      score2 ++;
      document.getElementById("result2").innerHTML = score2;
    }

    function down2(){
      if(score2 != 0 ){
        score2 --;
      }
      document.getElementById("result2").innerHTML = score2;
    }

    function up3(){
      score3 ++;
      document.getElementById("result3").innerHTML = score3;
    }

    function down3(){
      if(score3 != 0 ){
        score3 --;
      }
      document.getElementById("result3").innerHTML = score3;
    }

    function up4(){
      score4 ++;
      document.getElementById("result4").innerHTML = score4;
    }

    function down4(){
      if(score4 != 0 ){
        score4 --;
      }
      document.getElementById("result4").innerHTML = score4;
    }


    </script>


    <div style="margin:40px;">
      <h1>Khúc Ca Lô Tô</h1>
    <audio controls>

      <source src="loto.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
    </audio>
    </div>
    <div >
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
    </div>
    </div>
</div>
    <!---- END MAIN AREA ---->


    <!-------- FOOTER  -------->

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
