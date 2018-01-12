<html>
<head>
    <style>
    body{
        background: url("https://wallpapersite.com/images/wallpapers/monsters-inc-1680x1050-animation-pixar-126.jpg") no-repeat fixed center;
        background-size: auto;
    }
    h1 {
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        font-size: 70px;
    }
    .feature{
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        font-size: 30px;
    }
    table{
        background-color:rgba(192,192,192,0.5);
    }
    </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
        <h1 align="center">Register Your Ticket</h1>
        <form action="/welcome.php" method="get">
            <table align="center">
            <tr>
                <td><div class="feature">Serial Key:</div></td>
                <td><input type="text" name="serialkey"></td>
            </tr>

            <tr>
                <td><div class="feature">First name:</div></td><td><input type="text" name="fname"></br></td>
            </tr>
            <tr>
                <td><div class="feature">Last name:</div></td>
                <td><input type="text" name="lname"></br></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="Submit"></td>
            </tr>
            </table>
        </form>
    </body>
</html>
