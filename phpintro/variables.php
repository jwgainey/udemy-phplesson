<?php
    define("TITLE", "PHP Variables & Constants");
?>

<!DOCTYPE html>

<html>
    <head>
        <title><?php echo TITLE; ?></title>
    </head>

    <body>

    <?php
        // Variables
        $yourVariable = "hello world!";

        // BOOLEAN: A boolean specifies a value of true or false
        $loggedIn = true;

        //INTEGER: an integer is any whole number
        $myAge = 30;

        //FLOATING POINT: usually a fractional number, with a decimal
        $totalPrice = 146.28;

        //STRING: text that must be inclosed in quotations
        $fullName = "Joel Gainey";

        // DISPLAY VARIABLES
        echo "Hello, my name is $fullName and I am $myAge and cost $totalPrice per hour";

        //CONSTANTS
        

        echo TITLE;


    ?>   
    </body>


</html>