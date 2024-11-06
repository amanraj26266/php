<!DOCTYPE html>
<html>
    <head> 
        <title>Example of PHP POST method</title>
    </head>
    <body>
        <?php 
        if(isset($_POST["name"])){
            echo "<p>Hi,".$_POST["name"]."</p>";
        }
        ?>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
          <H2>POST</H2>
            <label for="inputName">Name:</label>
            <input type="text" id="inputName" name="name">
            <input type="submit" value="Submit">
            
    </body>
</html>