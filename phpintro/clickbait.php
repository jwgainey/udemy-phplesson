<?php 
    define("TITLE", "Honest Click Bait Headlines");
    include("functions.php");
    
    if( isset( $_POST["fix_submit"] ) ) { 
        checkForCLickBait();
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
    <title><?php echo TITLE ?></title>
</head>
<body>
   <div class="container-fluid">
       <h1><?php echo TITLE ?></h1>
       <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using a simple program.</p>

       <div class="row">
           <form action="" class="col-sm-8 col-offset-2" method="post"> 
               <textarea placeholder="Paste click bait headline here"       class="form-control input-lg" name="clickbait_headline">
               </textarea><br>
               <button class="btn btn-primary btn-lg" type="submit" name="fix_submit">Make Honest</button>
           </form><br>

           <?php
                if( isset( $_POST["fix_submit"] ) ) {
                    $clickBait = checkForCLickBait()[0];

                    $honestHeadline = checkForCLickBait()[1];


                    displayHonestHeadline($clickBait, $honestHeadline);
                }
           ?>


       </div>
   </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>