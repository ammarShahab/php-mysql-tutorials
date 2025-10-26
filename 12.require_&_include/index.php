<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Require and Include means importing file from another folder. The major difference is that require throws error if file is not found and stop the execution. Include also throw error but it will continue the execution. </p>
    
    <h4>Require</h4>
    
    <p>
       
        require('require.php')
        // require('requires.php')
        
      
    </p>
    <p>

        require('requires.php') //as the page not found stop execution here.
   
    </p>


    <h4>Include</h4>
    <p>
      
        include('include.php')

    </p>

    <p>

    include('includes.php') //as the page not found but it will execute the next line.

    </p>

    <h4>Require</h4>
    <p>
        <?php 
        require('require.php')
        // require('requires.php')
        
        ?>
    </p>
    <p>
        <?php 
        require('requires.php')
        ?>
    </p>


    <h4>Include</h4>
    <p>
        <?php 
        include('include.php')
        ?>
    </p>

    <p>
    <?php 
    include('includes.php')
    ?>
    </p>
    <p>End</p>
</body>
</html>