<DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">


    
</head>
<body>

    <div class="center">
        <h1>Buy desserts:</h1>
        <form class="form" method="get" action="index1.php">

            <input type="checkbox" id="check1" class="box" name="item[]" value="1"><label for="check1">Cheesecake - 10$</label><br>
            <input type="checkbox" id="check2" name="item[]" value="2"><label for="check2">Chocolate cake - 8$</label><br>
            <input type="checkbox" id="check3" name="item[]" value="3"><label for="check3">Muffin - 5$</label><br>
            <input type="checkbox" id="check4" name="item[]" value="4"><label for="check4">Vanilla cake - 7$</label><br>

            <button class="btn" type="submit">Order</button>
        </form>
    </div>
    <footer>
        <small>&copy;<?php echo date('Y'); ?> - Mina Maksic</small>
    </footer>


</body>
</html>