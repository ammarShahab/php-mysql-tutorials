<!-- Strings -->
<?php 
$firstName='Aditi';
$lastName=' Islam';
?>

<?php 

$employeeName='Arham';
$id=5900;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>
    <!-- to get the concatenated string use single ('') quote -->
    <p>
        <?php echo 'Concatenated string: ' . $firstName . $lastName; ?>
    </p>
<!-- to get dynamic value in a strings use double ("") quote -->
    <p>
        <?php echo "Dynamic string: $employeeName's id is $id"; ?>
    </p>

    <!-- escape character -->
     <p>
        <?php echo "Escape Character example: He is shouting like \"Whaaaa\""; ?>
     </p>

     <!-- find the specific word from string -->
      <p>
      <?php echo 'find the specific word using []: ' . $firstName[1]
      ?>
      </p>

      <!-- Some string method -->

      <p>
        <!-- check the length of a string -->
        <?php 
        echo 'lenght of a string of firstName: ' . strlen($firstName)
        ?>
        
      </p>
      <!-- upper and lower case -->
      <p>
        <?php 
        echo 'Uppercase of firstName: ' . strtoupper($firstName)
        ?>
      </p>
      <p>
        <?php 
        echo 'Lowercase of lastName: ' . strtolower($lastName)
        ?>
      </p>
      <!-- replace a character -->
      <p>
        <?php 
        echo 'Replacing id number: ' . str_replace(5, 8, $id)
        // here first argument is the character to change, second argument is the character i want to implement, third argument is the variable i want to implement
        ?>
      </p>
      


</body>
</html>