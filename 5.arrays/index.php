<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <p>Arrays are 2 types</p>
    <ol>
        <li>indexed array </li>
        <li>associative array</li>
    </ol>

    <h2>1. Indexed Array</h2>
    <p>For string data type:
    <?php
    $people=['Akhir', 'Dewan', "Muktadir"]
    ?>
    </p>

    <p>get the array index $people[2]: <?php echo $people[2]?></p>

<p>For number data type:
    <?php $age=[10, 15, 25] ?>
</p>

<p><?php echo $age[2] ?></p>

<p>Another way of defining array is following $iceCream= array('Igloo', 'Polar'):</p>
<p>
<?php 
$iceCream= array('Igloo', 'Polar') ?>
</p>
<p>
    <?php echo $iceCream[1]?>
</p>

<p>If want to print the whole array it will show the following error when u use as $age<?php echo $age ?></p>

<p>To solve this u have to use following (print_r($age)) means print readable version</p>
<p> <?php echo print_r($age) ?></p>

<h4>Overright an array</h4>
<h5>using $age[0]=89</h5>
<p>
    <?php $age[0]=89 ?>
    <?php echo print_r($age)  ?>
</p>

<h4>Add a new value in an array</h4>
<h5>using $age[]=90</h5>
<p>
    <?php $age[]=90 ?>
    <?php echo print_r($age)  ?>
</p>

<h5>Using push method: array_push($age, 55)</h5>
<p>
    <?php array_push($age, 55) ?>
    <?php echo print_r($age)  ?>
</p>

<h4>Counting the length of an array: count($age)</h4>
<p>
    
    <?php echo '$age length is: ' . count($age)  ?>
</p>

<h4>Merging an array</h4>
<p>
    <?php $numOfArr = [12, 55, 90] ?>
</p>
<p>Merging array: array_merge($people, $numOfArr)</p>
<?php echo print_r(array_merge($people, $numOfArr)) ?>

<h2>2. Associative Array</h2>

<p>Same as indexed array but instead Of index number key value pair is used here like: <b>$ninjasOne = ["Ali" => "Black", "Rohmot" => "Yellow"]</b> here the key is work as index </p>

<p>Example:</p>
<p><?php 
$ninjasOne = ["Ali" => "Black", "Rohmot" => "Yellow"]
?></p>
<p>To find the specific value: $ninjasOne['Ali']</p>
<?php echo $ninjasOne["Ali"] ?>

<h4>Overright an array</h4>
<p><?php $ninjasTwo = ["Apple" => 250, "Mango" => 90, "Banana" => 70] ?> $ninjasTwo = ["Apple" => 250, "Mango" => 90, "Banana" => 70]</p>
<p><?php $ninjasTwo["Apple"] = 350 ?> $ninjasTwo["Apple"] = 350</p>
<p><?php echo print_r($ninjasTwo) ?> </p>
<h4>Counting the length of an array: count($age)</h4>
<p><?php $ninjasThree = array("Jackfruit" => 400, "Watermelon" => 250, "Grape" => 450)  ?></p>
<p>
     $ninjasThree = array("Jackfruit" => 400, "Watermelon" => 250, "Grape" => 450) 
</p>

<p > <?php echo '$ninjasThree array length: ' . count($ninjasThree)  ?></p>

<p>others merge methods are also same</p>

</body>
</html>