<!DOCTYPE html>
<html>
    <head> 
        <title>Example of PHP GET method</title>
    </head>
    <body>
        <?php 
        if(isset($_GET["name"])){
            echo "<p>Hi,".$_GET["name"]."</p>";
        }
        ?>
        <form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label for="inputName">Name:</label>
            <input type="text" id="inputName" name="name">
            <input type="submit" value="Submit">
            
    </body>
</html>