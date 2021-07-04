<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="Images/mangosteen_icon.png" type="image/gif" sizes="16x16">
    <script src="Js/BingoCard.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8ea3ef77b3.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Css/styles.css">
    <link rel="stylesheet" href="Css/BingoCard.css">

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
            <h2><i class="fas fa-seedling" style="color:#ffe8e8;"></i>  Bingo Card</h2>
          </div>
        </div>

      </div>

    </header>

    <!-------- HEADER END  -------->


    <!-----MAIN AREA------>
    <center>
    <div id="container">
        <div id="header">
             <h1>Welcome</h1>
        </div>

          <h1>Lets Play BINGO</h1>
<table id = "bingo">
<tr>
  <th>B</th>
  <th>I</th>
  <th>N</th>
  <th>G</th>
  <th>O</th>
</tr>
<tr>
  <td id="square0">&nbsp;</td>
  <td id="square5">&nbsp;</td>
  <td id="square10">&nbsp;</td>
  <td id="square14">&nbsp;</td>
  <td id="square19">&nbsp;</td>
</tr>
<tr>
  <td id="square1">&nbsp;</td>
  <td id="square6">&nbsp;</td>
  <td id="square11">&nbsp;</td>
  <td id="square15">&nbsp;</td>
  <td id="square20">&nbsp;</td>
</tr>
<tr>
  <td id="square2">&nbsp;</td>
  <td id="square7">&nbsp;</td>
  <td id="free">Free</td>
  <td id="square16">&nbsp;</td>
  <td id="square21">&nbsp;</td>
</tr>
<tr>
  <td id="square3">&nbsp;</td>
  <td id="square8">&nbsp;</td>
  <td id="square12">&nbsp;</td>
  <td id="square17">&nbsp;</td>
  <td id="square22">&nbsp;</td>
</tr>
<tr>
  <td id="square4">&nbsp;</td>
  <td id="square9">&nbsp;</td>
  <td id="square13">&nbsp;</td>
  <td id="square18">&nbsp;</td>
  <td id="square23">&nbsp;</td>
</tr>

</table>
<p><a href="#" id="reload">Click here</a> to create a new card</p>

    </div>
    <button id="btn" class="btn btn-success" type="submit"  onClick="window.location.reload();" >New Card</button>

</center>
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


      btn.addEventListener('click', UpdateTable);


      // Set the max length of random number
      // and the max length
      var maxLength = 5;

      // Returns a random number
      function CreateLottoValues() {
          return Math.floor(Math.random() * 75 + 1);
      }

      function DistinctRandomNumberGenerator(min, max) {
          min = Number(min) || 0;
          max = Number(max) || 10;
          var keyTracker = {};
          var range = max - min;

          function getDistinctRandomNumber() {
            var rand = min + Math.floor(Math.random() * range);
            switch(!!keyTracker[rand]) {
              case true: {
                return getDistinctRandomNumber();
              }
              default: {
                keyTracker[rand] = true;
                return rand;
              }
            }
          }

          function getRandomKey() {
            switch (Object.keys(keyTracker).length === range + 1) {
              case true: {
                return 0;
              }
              default: {
                return getDistinctRandomNumber();
              }
            }
          }

          this.getRandomKey = getRandomKey();
          return this.getRandomKey;
        }
      //create table
      function UpdateTable() {

          for (var i = 0; i < maxLength; i++) {
            var arr = [];
            if(i==0){
              while(arr.length < 5){
                  var r = Math.floor(Math.random() * 15) + 1;
                  if(arr.indexOf(r) === -1) arr.push(r);
              }
            }
            else if(i==1){
              while(arr.length < 5){
                  var r = Math.floor(Math.random() * (30-16)) + 16;
                  if(arr.indexOf(r) === -1) arr.push(r);
              }
            }

            else if(i==2){
              while(arr.length < 5){
                  var r = Math.floor(Math.random() * (45-31)) + 31;
                  if(arr.indexOf(r) === -1) arr.push(r);
              }
            }

            else if(i==3){
              while(arr.length < 5){
                  var r = Math.floor(Math.random() * (60-46)) + 46;
                  if(arr.indexOf(r) === -1) arr.push(r);
              }
            }
            else if(i==4){
              while(arr.length < 5){
                  var r = Math.floor(Math.random() * (75-61)) + 61;
                  if(arr.indexOf(r) === -1) arr.push(r);
              }
            }
              for (var j = 0; j < maxLength; j++) {
                  tmp = 'cell' + j +i;

                  document.getElementById(tmp).innerHTML = arr[j];



              }
          }
      }


      function toggleColor(evt) {
      	if (evt) {
      		var thisSquare = evt.target;
      	}	else {
      		var thisSquare = window.event.srcElement;
      	}
      	if (thisSquare.className == "") {
      		thisSquare.className = "pickedBG";
      	}	else {
      		thisSquare.className = "";
      	}

      }

      UpdateTable();
    </script>
<script src="jquery-3.5.1.min.js"></script>
  </body>
</html>
