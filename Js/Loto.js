alert("Hello");
  btn.addEventListener('click', UpdateTable);


  // Set the max length of random number
  // and the max length
  var maxLength = 5;

  // Returns a random number
  function CreateLottoValues() {
      return Math.floor(Math.random() * 90 + 1);
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

      this.getRandomKey = getRandomKey;
      return getRandomKey;
    }
  //create table
  function UpdateTable() {

      for (var i = 0; i < 5; i++) {
          for (var j = 0; j < maxLength; j++) {
              tmp = 'cell' + i + j;
              if(j==0)
                document.getElementById(tmp).innerHTML = DistinctRandomNumberGenerator(1,9);
              else if(j==1)
                document.getElementById(tmp).innerHTML = DistinctRandomNumberGenerator(10,19)
              else if(j==2)
                document.getElementById(tmp).innerHTML = Math.floor(Math.random() * 19 + 10);



          }
      }
  }

  UpdateTable();
