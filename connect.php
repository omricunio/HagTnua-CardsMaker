<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1 align="center">Guests List</h1>
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

    $scanned = 0;

    $result = $conn->query("SELECT * FROM tickets");
    if ($result->num_rows > 0) {
    // output data of each row
        echo '<table border="1" width="100%">';
        echo '<tr><td><b>serialkey</b></td><td><b>scanstatus</b></td></tr>';
        $index = 0;
        while($row = $result->fetch_assoc())
        {
            echo '<tr>';
                echo '<td>'.$row["serialkey"].'<td>'.$row["scanstatus"].'</td>';
            echo '</tr>';
            if ($row["scanstatus"] == "1")
            {
              $scanned++;
            }
            $index++;
        }
        echo '</table>';
    }
    else
    {
        echo "0 results";
    }
   echo "</br><h2>Scanned tickets:" . $scanned . '</h2>';
   echo "<h2></br>Total tickets:" . $result->num_rows.'</h2>';
   $conn->close();
?>
</body>
