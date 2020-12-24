<?php 
    define("TITLE", "Functions &amp; Arguments");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo TITLE; ?></title>
</head>
<body>

    <div class="container">
        <h1><?php echo TITLE; ?></h1>

    
        <?php 

            //no argument
           function myFirstFunction() {
                $a = 0;
                do {
                    echo "$a &nbsp;";
                    $a++;
                } while ($a <= 100);
           }

           //Call the function
           myFirstFunction();

           function mySecondFunction($a) {
                do {
                    echo "$a &nbsp;";
                    $a++;
                } while ($a <= 10);
            }
            
            mySecondFunction(5);


            function addTogether($num1, $num2) {
                $newNum = $num1 + $num2;
                echo "$num1 + $num2 = $newNum";
            }
            addTogether(29, 98);
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>