<!DOCTYPE html>
<html>
    <head></head>


    <body>

    Welcome <?php echo $_GET["name"]; ?><br>
    Your email is: <?php echo $_GET["email"]; ?><br>
    <?php
    if ($_GET["phoneNumber"] != "") {
        echo "Your Phone Number is " . $_GET["phoneNumber"];
    }
    ?><br>
    <?php
    if ($_GET["stateOfResidence"] != "") {
        echo "You state of residence is " . $_GET["stateOfResidence"];
    }
    ?>

    </body>
</html>