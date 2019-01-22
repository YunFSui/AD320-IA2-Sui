<html>
    <head></head>

    
    <body>

    Welcome <?php echo $_GET["name"]; ?><br>
    Your email is: <?php echo $_GET["email"]; ?><br>
    <?php
    $x = isset($_GET["phoneNumber"]);
    if ($x) {
        echo "Your Phone Number is " + $_GET["phoneNumber"];
    }
    ?><br>
    <?php
    $y = isset($_GET["stateOfResidence"]);
    if ($y) {
        echo "You state of residence is " + $_GET["stateOfResidence"];
    }
    ?>

    </body>
</html>