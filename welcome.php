
<html>
    <head>
    </head>
    <body>
        <?php
                
            $dbhost = 'localhost';
            $dbuser = 'id4018540_user1';
            $dbpass = 'pass123';
            $dbname = 'id4018540_mydb';
            $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if(! $conn ) {
                die('Could not connect');
            }
   
            $sql = "INSERT INTO `users` (`serialkey`, `fname`, `lname`, `date`) VALUES ('".$_GET["serialkey"]."', '".$_GET["fname"]."','".$_GET["lname"]."', '2017-12-19')";
            
            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            echo "welcome ".$_GET["fname"];
            echo '<script>window.location.href = "/connect.php";</script>';
        ?>
    </body>
</html>