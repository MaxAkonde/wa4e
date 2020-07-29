<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Max AKONDE PHP</title>
</head>

<body>
    <h1>Max AKONDE PHP</h1>
    <p> The SHA256 hash of "Max AKONDE" is <?php print hash('sha256', 'Max AKONDE');  ?> </p>
    <pre>ASCII ART
    **     ** 
    ***   *** 
    **** **** 
    ** *** ** 
    **     ** 
    **     ** 
    **     ** 
    </pre>
    <a href="check.php">Click here to check the error setting</a>
    <br />
    <a href="fail.php">Click here to cause a traceback</a>
    <?php

$x = 12;
$y = 12 + $x++;
echo "y = $y x = $x";
    
     ?>
</body>

</html>