<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope</title>
</head>
<body>
    <h3>Varible Scope</h3>
    <p>variable scope is 2 types in php</p>
    <ol>
        <li>Local Variable</li>
        <li>global variable</li>
    </ol>
    <h4>Global Variable</h4>
    <p>variable declared outside a function is called global variable</p>
    <h4>Local Variable</h4>
    <p>variable declared inside a function is called local variable</p>
    <h4>Example</h4>    
    <p>function exmpleScope() { <br/>
        $name = "PHP";//local variable <br/>
        echo "Hello $name"; <br/>
    } <br/>

    exmpleScope()</p>

    <?php 
    function exmpleScope() {
        $name = "PHP";//local variable
        echo "Hello $name";
    }

    exmpleScope()
    ?>

    <h4>You cannot use the local variable in a function normally. To use the local variable in a function use global keyword</h4>
    <p>  $age = 30;<br>
        function calculateAge() { <br>
            global $age;//accessing the global variable using global keyword <br>
            echo $age += 5; //changing the global age value <br>
        } <br>
        calculateAge(); //35 <br>
        echo $age// 35 global age value is also changed
    <p>
        <?php
        $age = 30;
        function calculateAge() {
            global $age;//accessing the global variable using global keyword
            echo 'Ans: ' . $age += 5; //changing the global age value
        }
        calculateAge();
        ?>
        <p>Ans: 

        <?php 
        echo $age//global age value is also changed
         ?>
        </p>

        <h4>In case of both global and local variable </h4>
        <p>
        $personName = 'Mario';//global variable <br>
        function sayName($personName) {//here person name becomes local variable due to pass as a parameter. Now if u change only the local variable it will not change the global variable <br>
        $personName = 'Wario';//change the local variable <br>

            echo "Local: Hi $personName";<br>
        } <br>
        
        sayName($personName);//passing the global variable
        <br>
        echo "Global: $personName"
        </p>
        <?php 
        $personName = 'Mario';//global variable
        function sayName($personName) {//here person name becomes local variable due to pass as a parameter. Now if u change only the local variable it will not change the global variable
            $personName = 'Wario';//change the local variable

            echo "Local: Hi $personName";
        }
        
        sayName($personName);//passing the global variable
        ?>

        <p>
        <?php 
        echo "Global: $personName"
        ?>
        </p>
    </p>

    <h4>But u can change the global by pass the global variable in a parameter as a reference using (&) sign</h4>
    <p>
         $personName1 = 'Haris';//global variable <br>
        function sayYourName(&$personName1) {//here using (&) in parameter the personName1 is passed as reference. Now if u change only the personName1 locally it will change the global variable <br>
        $personName1 = 'Sohel';//change the local variable <br>

        echo "Local: Hi $personName1"; <br>
        } <br>
        
        sayYourName($personName1);//passing the global variable <br>
        echo "Global: $personName1"

    </p>
    <?php 
     $personName1 = 'Haris';//global variable
        function sayYourName(&$personName1) {//here using (&) in parameter the personName1 is passed as reference. Now if u change only the personName1 locally it will change the global variable
        $personName1 = 'Sohel';//change in local variable

        echo "Local: Hi $personName1";
        }
        
        sayYourName($personName1);//passing the global variable
    ?>
    <p>
        <?php 
        echo "Global: $personName1"
        ?>
    </p>
</body>
</html>