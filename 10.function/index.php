<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h3>Normal Function</h3>
    <p>function sayHi($name)  {
        echo "Hello $name";
    } 
    sayHi('Mario')</p>
    <?php function sayHi($name)  {
        echo "Hello $name";
    } 
    sayHi('Mario')
    ?>
    <h3>Function with associative array</h3>
    <p>function productInfo($product)  {
        // for dynamic data use curly braces on each dynamic value {}
        echo "{$product['name']} cost $ {$product['price'] } <br/>";
    }

    productInfo(['name'=>'Apple', 'price'=>30]);
    productInfo(['name'=>'Mango', 'price'=>50])</p>
    <?php function productInfo($product)  {
        // for dynamic data use curly braces on each dynamic value {}
        echo "{$product['name']} cost $ {$product['price'] } <br/>";
    }

    productInfo(['name'=>'Apple', 'price'=>30]);
    productInfo(['name'=>'Mango', 'price'=>50])
    ?>
    <h3>Function with return keyword </h3>

    <p>function calculateSqr($number) { <br/>
        return $number**2;   <br/>
    }<br/>

    $sqrNum = calculateSqr(5); <br/>
    echo $sqrNum</p>
    <?php 
    function calculateSqr($number) {
        return $number**2;  
    }

    $sqrNum = calculateSqr(5);
    echo $sqrNum
    ?>

</body>
</html>