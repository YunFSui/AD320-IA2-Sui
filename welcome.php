<!DOCTYPE html>
<html>
    <head></head>


    <body>

    Name: <?php echo $_GET["name"]; ?><br>
    Email: <?php echo $_GET["email"]; ?><br>
    <?php
    if ($_GET["phoneNumber"] != "") {
        echo "Phone: " . $_GET["phoneNumber"];
    }
    ?><br>
    <?php
    if ($_GET["stateOfResidence"] != "") {
        echo "State: " . $_GET["stateOfResidence"];
    }
    ?>

    </body>
</html>