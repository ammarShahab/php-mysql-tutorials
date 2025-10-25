<?php 
//to define a variable
$name = "John";
$age = 20;
$height = 1.8;
?>

<?php
// define constant
define("NAME", "Ratul");
// u cannot reassign a constant
// define("NAME", "Mridhil");

// or

// NAME = "Mario";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.variable_&_constant</title>
</head>
<body>
    <!-- following (.) is called string concatenation -->
    <p><?php echo $name . " is " . $age . " years old and " . $height . " meters tall." ?></p>
    <p><?php echo NAME . " is " . "the example of constant"?></p>
</body>
</html>