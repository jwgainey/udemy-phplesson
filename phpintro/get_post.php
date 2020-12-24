<?php 
    define("TITLE", "GET &amp; POST");

    if ( isset( $_POST["post_submit"] ) ) {

        // function to validate data
        function validateFormData($formData) {
            $formData = trim( stripslashes( htmlspecialchars($formData) ) );
            return $formData;
        }

        //checks if inputs are empty 
        //creates var with form data
        //wraps the data in function

        if( !$_POST["post_name"] ) {
            $nameError = "Please enter your name <br>";
        } else {
            $name = validateFormData( $_POST["post_name"] );
        }
        
        if( !$_POST["post_email"]) {
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateFormData( $_POST["post_email"]);
        }

    }

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

        <h4>Submitted by _GET</h4>
        <form action="form_get.php" method="get">
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="email" name="eMail">
            <input type="submit" name="form_submit">
        </form>

        <hr>

        <h4>Submitted by _POST</h4>
        <form action="form_post.php" method="post">
            <input type="text" placeholder="name" name="post_name">
            <input type="text" placeholder="email" name="_post_email">
            <input type="submit" name="post_submit">
        </form>

        <hr>

        <h4>Submitted to Current Page</h4>
        <p class="text-danger">*Required Fields</p>

        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="post">
            <small class="text-danger">*<?php echo $nameError; ?></small>
            <input type="text" placeholder="name" name="post_name"><br><br>

            <small class="text-danger">*<?php echo $emailError; ?></small>
            <input type="text" placeholder="Email" name="post_email"><br><br>
            <input type="submit" name="post_submit">
        </form>

        <?php
            
            if( isset($_POST["post_submit"])) {
                echo "<h4>Your Info</h4>";
                echo "$name <br> $email <br>";
            }
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>