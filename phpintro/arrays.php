<?php 
    define("TITLE", "PHP Arrays");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo TITLE ?></title>
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            <?php 
                //PLAIN VARIABLES
                $username = 'jwgainey';
                $fullName = 'Joel Gainey';
                $age      = 30;
                $gender   ='Male';
                $country  ='USA';

                //SIMPLE ARRAY
                $user     = array(
                                'jwgainey',    //0
                                'Joel Gainey', //1
                                30,            //2
                                'Male',        //3
                                'USA'          //4
                );

                echo $user[0]."<br>";
                echo $user[2]."<br>";
                echo $user[4]."<br>";
                echo $user[1]."<br>";
                echo $user[3]."<br>";

                //ASSOCIATVE ARRAYS
                $person = array (
                        "username" => "jwgainey",
                        "fullName" => "Joel Gainey",
                        "age"      => 30,
                        "gender"   => "Male",
                        "country"  => "USA"                        
                );

                echo $person["username"]."<br>";
                echo $person["fullName"]."<br>";
                echo $person["gender"]."<br>";
                echo $person["country"]."<br>";
                echo $person["age"]."<br>";

                //MULTIDIMENTIAL ARRAY
                $employees = array(
                                array( // index of 0
                                    "username" => "jwgainey",
                                    "fullName" => "Joel Gainey",
                                    "age"      => 30,
                                    "gender"   => "Male",
                                    "country"  => "USA"  
                                ),
                                array( // index of 1
                                    "username" => "dcooke",
                                    "fullName" => "Dane Cooke",
                                    "age"      => 27,
                                    "gender"   => "Male",
                                    "country"  => "Germany"  
                                ),
                                array( // index of 2
                                        "username" => "jbaik",
                                        "fullName" => "Jaz Baik",
                                        "age"      => 26,
                                        "gender"   => "Female",
                                        "country"  => "Korea"  
                                )
                            );

                echo $employees[0]["fullName"];
                echo $employees[2]["age"];
            ?>



        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>