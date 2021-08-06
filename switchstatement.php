<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Switch Statement</title>
</head>
<body>
    <?php
    echo '<h1>Simple Switch Statement</h1>';

    $grade = 'A';

    switch ($grade) {
        case 'A':
            echo '<h3 style = "color : green"> You are a superstar</h3>';
            break;
        case 'B':
            echo '<h3 style = "color : blue"> You did well</h3>';
            break;
        default:
        echo '<h3 style = "color : red"> You have failed</h3>';
        break;
    }


    ?>
    
</body>
</html>