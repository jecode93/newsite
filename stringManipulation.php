<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple String maniputalion</title>
</head>
<body>
    <h1>Simple String maniputalion</h1>
    <?php 
        $phrase1 = "Student who came late, ";
        $phrase2 = "In class, stand with rock.";

        echo $phrase1 .' '. $phrase2;

        $myName = 'jean emmanuel cadet';

        echo '<p>The normal variable of my name is : '. $myName .' .';
        echo '<hr/>';
        echo '<p>Uppercase first letter in my name is : '. ucfirst($myName).' .';
        echo '<p>Uppercase first letter of each word : '. ucwords($myName).' .';
        echo '<p>Uppercase my name : '. strtoupper($myName).' .';
        echo '<p>Lowercase my name : '. strtolower($myName).' .';
        echo '<hr/>';

        echo 'String 10 times :' . str_repeat("a", 10) .' .';

        echo '<p> Get a substring : ' . substr($myName, 3, 1). ' </p>';
        echo '<p>Get position of a string : '. strpos($myName, 'm'). '</p>';

        echo '<p>Find character "m" : ' . strchr($myName, 'm'). '</p>';
        echo '<p>Find character "a" : ' . strchr($myName, 'a'). '</p>';
        echo '<p>Find character "l" : ' . strchr($myName, 'l'). '</p>';
        echo '<p>Find character "c" : ' . strchr($myName, 'c'). '</p>';

        echo '<p>Find length of string : ' . strlen($myName). '</p>';

        echo '<p>Trim spaces on both sides : A ' . trim(" B C D "). ' "E" </p>';
        echo '<p>Trim spaces to the left : A ' . ltrim(" B C D "). ' "E" </p>';
        echo '<p>Trim spaces to the right : A ' . rtrim(" B C D "). ' "E" </p>';

        echo '<p>Repalce string with another : ' . str_replace("stand", "sit", $phrase2). ' </p>';




    
    ?> 
</body>
</html>