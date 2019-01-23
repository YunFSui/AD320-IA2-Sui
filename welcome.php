<!DOCTYPE html>
<html>
    <head></head>


    <body>

    <?php
    $get_array = $_GET;

    foreach($get_array as $key => $val){
        if ($val != ""){
            echo $key . ': ' . $val . '<br>';  
        }
    }
    ?>

    </body>
</html>