<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple If Statement</title>
</head>
<body>
    <?php echo '<h1>Simple If Statement</h1>';
     
        // An if statement that will carry out an action based on the value of the variable.
        
        $grade = 80;

        if($grade >= 50){
            echo '<h3 style = "color : green"> You have passed</h3>';
        }else{
            echo '<h3 style = "color : red"> You have failed</h3>';
        }

        $grade = 'B';

        if ($grade == 'A') {
            echo '<h3 style = "color : green"> You are a superstar</h3>';
        }
        elseif ($grade == 'B') {
            echo '<h3 style = "color : blue"> You did well</h3>';
        }
        else {
            echo '<h3 style = "color : red"> You have failed</h3>';
        }


        
    ?>
</body>
</html>