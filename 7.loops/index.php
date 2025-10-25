<?php 
$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h3>For Loops</h3>
    <h5>Syntax</h5>
    <p>for ($i=0; $i < 5; $i++) { 
        echo $i;
    } </p>
    <p>Ans:<?php for ($i=0; $i < 5; $i++) { 
        echo '<br/>' . $i . '<br/>';
    } 
    ?></p>

    <h3>Foreach Loops</h3>
    <h5>Syntax</h5>

    <p> foreach ($variable as $key ) {
        # code...
    }</p>

    <p>$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];</p>
    <p>foreach ($products as $product ) {
        echo 'Product Name: ' . $product['name'] . ', ' . 'Product Price: '. $product['price'] . '<br/>';
    }</p>
    <p><?php foreach ($products as $product ) {
        echo 'Product Name: ' . $product['name'] . ', ' . 'Product Price: '. $product['price'] . '<br/>';
    } ?> </p>
    
    <h4>Loop through a html tag</h4>

    <h4>Syntax</h4>
    <p>Syntax is in the code</p>

     <p><?php foreach ($products as $product) { ?>
        <h3><?php echo $product['name'] ?></h3>
        <p> $ <?php echo  $product['price'] ?></p>
    <?php } ?></p>

    <h5>Products</h5>

    <p><?php foreach ($products as $product) { ?>
        <h3><?php echo $product['name'] ?></h3>
        <p> $ <?php echo  $product['price'] ?></p>
    <?php } ?></p>
</body>
</html>