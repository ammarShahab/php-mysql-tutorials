<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Boolean</h3>
    <p>In php the true value returns 1 and the false value returns empty strings ("") instead of 0</p>
    <p>true = <?php echo true ?></p>
    <p>false = <?php echo false ?></p>
    <h3>Comparison</h3>
    <h5>Number comparison</h5>
    <p>5 < 10 = <?php echo 5 < 10 ?></p>
    <p>5 > 10 = <?php echo 5 > 10 ?></p>
    <p>5 == '5' = <?php echo 5 == '5' ?></p>
    <p>5 == 5 = <?php echo 5 == 5 ?></p>
    <p>5 === 5 = <?php echo 5 === 5 ?></p>
    <p>5 === '5' = <?php echo 5 === '5' ?></p>
    <h5>String comparison</h5>
    <p>'shaun' === 'moon' = <?php echo 'shaun' === 'Moon' ?></p>
    <p>'shaun' > 'moon' = <?php echo 'shaun' > 'moon' ?></p>
    <p>here as the s is after m php take it as higher value</p>
    <p>'shaun' < 'moon' = <?php echo 'shaun' < 'moon' ?></p>
    <p>here as the m is before s php take it as lower value</p>
    <p>'mario' < 'Mario' = <?php echo 'mario' < 'Mario' ?></p>
    <p>'mario' > 'Mario' = <?php echo 'mario' > 'Mario' ?></p>
    <p>In case of lowercase and uppercase comparison php take lowercase as higher value</p>
    
    <p>true == 1 = <?php echo true == 1 ?></p>
    <p>false == '' = <?php echo false == '' ?></p>

</body>
</html>