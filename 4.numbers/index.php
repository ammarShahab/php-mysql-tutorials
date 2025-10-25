<?php 
$pi = 3.1416;
$num1 = 3;
$num2 = 9;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <!-- Math method -->
    <p>
        <!-- floor -->
        <?php echo 'floor Method: ' . floor($pi)?>
    </p>
    <p>
        <!-- ceil -->
        <?php echo 'ceil Method: ' . ceil($pi)?>
    </p>

    <!-- Operator -->
     <!-- commonly used operator (+, -, *, /, **)-->

<p>
    <!-- <?php  ?> -->

</p>
    <!-- order of operation -->
    <!-- order follows the BODMAS (bracket, Operator, Divide, Multiplication, Addition, Subtraction) -->
    <p>
        <?php echo 3**2 + (8-6) / 2; ?>
    </p>

    <!-- Shorthand operators -->
     <p>
        <?php $num1++ ?>
        <?php echo 'incremental $num1++: ' . $num1 ?>
    </p>
    
    <p> 
        <?php $num2-- ?>
        <?php echo 'decremental $num2--: ' . $num2 ?>
     </p>

     <p>
        <?php $num1 +=1  ?>
        <?php echo 'another shorhand $num1 +=1: ' . $num1 +=1  ?>
     </p>

     <p>
        <p>Number Function (Builtin):</p>
        <p><?php echo 'pi(): ' . pi() ?> </p>

        <?php ?>
     </p>
<?php ?>
</body>
</html>