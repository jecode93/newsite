<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple While and Do while loop</title>
</head>
<body>
    <h1>While loop</h1>

    <?php 

        $count = 0;
        while ($count <= 10) {
            echo '<p> La valeur de Count est : '.$count.'.</p>';
            $count++;
        }
        
        echo 'Exit loop!';
    
    ?>


    <h1>Do while</h1>

    <?php 

        $count = 0;
        do{
            echo '<p>I am a do while loop</p>';
            $count++;
        }while($count <= 10);
    
    
    ?>
    
</body>
</html>