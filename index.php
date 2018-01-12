<html>
<?php include("master.php");  ?>
<head>
    <script type="text/javascript" src="data.json"></script>
    <style>
      .t {
        color: lime;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        font-size: 400%;
      }
      .z {
        color: cyan;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        font-size: 40px;
      }
      .tabletitle {
        color: cyan;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        font-size: 40px;
      }
      .allcountdown{
        color: lime;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        font-size: 7vh;
      }
      .allcountdown{
          background-color:rgba(192,192,192,0.5);
          border: 1;
          border-style: dotted;
          border-color: gray;
          width: 80%;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: 60px;
          font-weight: bold;
      }
      .time{
        color: yellow;
      }
      .info{
        background-color:rgba(192,192,192,0.5);
        border: 1;
        border-style: dotted;
        border-color: gray;
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        font-size: 60px;
        padding: 10px;
        margin: 0px;
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
          <div class="allcountdown" align="center" id="countdown" dir="rtl">
          <span id="days" class="time">00</span>
           ימים
          </br>
          <span id="hours" class="time">00</span>
           שעות
          </br>
          <span id="minutes" class="time">00</span>
          דקות
          </br>
          <span id="seconds" class="time">00</span>
           שניות
          </br>
          </div>


          <script>
          // Set the date we're counting down to
          var countDownDate = new Date("Feb 6, 2018 20:00:00").getTime();
          // Update the count down every 1 second
          var x = setInterval(function() {

              // Get todays date and time
              var now = new Date().getTime();

              // Find the distance between now an the count down date
              var distance = countDownDate - now;

              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);

              // Output the result in an element with id="demo"
              document.getElementById("days").innerHTML = days;
              document.getElementById("hours").innerHTML = hours;
              document.getElementById("minutes").innerHTML = minutes;
              document.getElementById("seconds").innerHTML = seconds;

              // If the count down is over, write some text
              if (distance < 0) {
                  clearInterval(x);
                  document.getElementById("countdown").innerHTML = "<h2 class='t'>מתחילים</h2>";
              }
          }, 1000);
            </script>
    </body>
</html>
