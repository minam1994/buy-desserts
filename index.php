<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
</head>

<body>
    <div class="center">
        <?php 

            if(isset($_GET["item"])){
                $dessert = $_GET["item"];
                $c = count($dessert);
                $price = 0.0;

                for($i = 0; $i<$c; $i++){
                    if($dessert[$i]==1){
                        $price = $price + 10;
                        echo "<pre>You have selected Cheesecake!</pre>";
                    }
                    if($dessert[$i]==2){
                        $price = $price + 8;                
                        echo "<pre>You have selected Chocolate cake!</pre>";
                    }
                    if($dessert[$i]==3){
                        $price = $price + 5;
                        echo "<pre>You have selected Muffin!</pre>";
                    }
                    if($dessert[$i]==4){
                        $price = $price + 7;
                        echo "<pre>You have selected Vanilla cake!</pre>";
                    }

                }
                echo "<h2>Final price is: " .$price. "$</h2>";
            } else{
                ?>
               <p class="blank">You need to choose item!</p>
        <button class="btn"><a href="home.php">Go Back</a></button>
            <?php
            }

        ?>
    </div>
    <footer>
        <small>&copy;<?php echo date('Y'); ?> - Mina Maksic</small>
    </footer>
    
</body>
</html>
