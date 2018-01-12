<html>
<?php include("master.php");  ?>
<head>
    <script type="text/javascript" src="data.json"></script>
    <style>
      .info{
        background-color:rgba(192,192,192,0.5);
        border: 1;
        border-style: dotted;
        border-color: gray;
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        font-size: 40px;
        padding: 10px;
        margin: 0px;
        width: 70vw;
        height: 40vh;
        padding: 5px;
        margin: 0px;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
      <div class="info" align="center" dir="rtl"><marquee id="info" direction="up" width="100%" height="100%"></marquee height="100%"></div>

            <script>
              var request = new XMLHttpRequest();
              request.open("GET", "./data.json", false);
              request.send(null);
              var json = JSON.parse(request.responseText);
              var str="";
              for(var i=0; i<Object.keys(json).length; i++){
                str+=Object.keys(json)[i]+" :</br><b>";
                str+=Object.values(json)[i]+"</b></br>";
              }
              document.getElementById("info").innerHTML = str;
            </script>

    </body>
</html>
