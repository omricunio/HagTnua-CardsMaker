<html>
<?php include("master.php");  ?>
<head>
    <style>
    .video{
      width: 80vw;
      height: 100vw;

    }
    .media{
      margin-left: auto;
      margin-right: auto;
      width: 80vw;
      height: 100vw;
    }
    img{
        width: auto;
        height: auto;
        max-width: 300px;
        max-height: 300px;
        margin: 8px;
        border: 1;
        border-style: dotted;

    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
    <body>
      <?php

         //$dbhost = 'localhost:3036';
         $dbhost = 'localhost';
         $dbuser = 'id4018540_user1';
         $dbpass = 'pass123';
         $dbname = 'id4018540_mydb';
         $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

          if(! $conn ) {
            die('Could not connect');
         }

          $result = $conn->query("SELECT * FROM photos");
          if ($result->num_rows > 0) {
          // output data of each row
              echo '<div align="center">';
              while($row = $result->fetch_assoc())
              {
                      echo '<img src="'.$row["url"].'"></img>';
              }
              echo '</div>';
          }
          else
          {
              echo "0 results";
          }
         $conn->close();
      ?>
    </body>
</html>
