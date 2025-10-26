<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 
1. install xampp
2. then run it by start 
3. click admin to check the the server is running in the browser
4. to change the port click config then select Apache(httpd.conf)
5. the scroll to find Listen 80 then change Listen 8090 but as it is running successfully so we keep the port 80.
6. in running server, in browser url change the "http://localhost/dashboard/" to "http://localhost:8090/dashboard/" it will run in new port.
7. then in c: drive xampp folder in htdocs created a folder projects (where all the projects will be created) => php_tutorials => 1.php_tuts
8. inside the 1.php_tuts folder created index.php and practice there.
9. to run the 1.php_tuts file in the server, type in browser url "http://localhost/projects/php_tutorials/1.php_tuts/" i.e all folder name works as routes of the htdocs folder. 
-->
    <h1><?php echo "Hello Ammar"; ?></h1>
    <p><?php echo "I love Web Development"?></p>
</body>
</html>
