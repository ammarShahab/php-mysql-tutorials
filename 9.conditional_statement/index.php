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
    <title>Conditional Statement</title>
</head>
<body>
    <h3>if else</h3>
    <h4>Product DB</h4>
    <p>$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];</p>

<h4>Loop through the product price and show the conditional product price</h4>
<p>See the code in the editor</p>

<ul>
    <?php foreach ($products as $product ) { ?>
        <?php if ($product['price'] > 15) { ?>
            <li>
                <?php echo $product['name'] ?>
            </li>
           <?php } ?>
   <?php } ?>
   
</ul>
<?php ?>
</body>
</html>