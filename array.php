<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Array and  Printouts</title>
</head>
<body>
    <h1>Simple Array and  Printouts</h1>

    <?php 

        // a variable
        $num = 3;

        //an array
        $numbers = array(1,2,3,4,5,6,7,8,9,10);

        $size = count($numbers);
        
        echo '<p> Array numbers is equal to '. $size .' .';

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    
    ?>
    
</body>
</html>