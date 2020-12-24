<?php 
    define("TITLE", "If, Else &amp; Elseif Statements");
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
             // IF expression is true, do something
             // IF expression is false, don't do anything
        $foo=55;
        $bar=79;
            if ($foo > $bar) {
                //code to execute if true
                echo "$foo is greater than $bar";
            } else {
                echo "$foo is less than $bar <br>";
            } 

            //ELSE
            $currentlyListeningTo = "Barenaked Ladies";

            if ($currentlyListeningTo == "The Tragically Hip") {
                echo "You are listening to $currentlyListeningTo";
            } else {
                echo "You might be listening to $currentlyListeningTo <br>";
            }

            //ELSEIF STATEMENT
            $favProgramingLang = "PHP"; 
            if ($favProgramingLang == "C++") {
                echo "Your favorite programming language is $favProgramingLang";
            } elseif ($favProgramingLang == "PHP") {
                echo "Good one! You dig $favProgramingLang";
            } else {
                echo "Guess you don't like PHP or C++";
            }

        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>