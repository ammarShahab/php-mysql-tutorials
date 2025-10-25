<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
</head>
<body>
    <h3>Multidimensional Array</h3>
<h5>Normal Multidimensional Array</h5>
<p>$arr = [
    ['Blue', 'Green', 'Orange'],
    ['Yellow', 'White', 'Black'],
    ]
</p>

<p><?php $arr = [
    ['Blue', 'Green', 'Orange'],
    ['Yellow', 'White', 'Black'],
    ] ?></p>

<p><?php echo print_r($arr) ?></p>
<h5>Associative Multidimensional Array</h5>
<p>$moviesCollection = [
    ['title' => 'Terminator', 'actor' => 'Arnold Swargeneger', 'director' => 'James Cameron'],
    ['title' => 'Transformer', 'actor' => 'Russel', 'director' => 'Steven Spilberg']
]</p>
<p> <?php $moviesCollection = [
    ['title' => 'Terminator', 'actor' => 'Arnold Swargeneger', 'director' => 'James Cameron'],
    ['title' => 'Transformer', 'actor' => 'Russel', 'director' => 'Steven Spielberg']
] ?> </p>
<p <?php echo print_r($moviesCollection) ?>></p>

<h5>Accessing array element</h5>
<p>$moviesCollection[1]['title']</p>
<p>Ans: <?php echo $moviesCollection[1]['title'] ?></p>

<h5>Adding array element</h5>
<p>$moviesCollection[]=['title' => 'Jurassic Park', 'actor' => 'Nicolas', 'director' => 'Steven Spielberg']</p>
<?php $moviesCollection[]=['title' => 'Jurassic Park', 'actor' => 'Nicolas', 'director' => 'Steven Spielberg'] ?>
<?php echo print_r($moviesCollection)  ?>
<h5>Removing Array element</h5>
<p>array_pop($moviesCollection)</p>
<?php array_pop($moviesCollection) ?>
<?php echo print_r($moviesCollection)  ?>
</body>
</html>