<html>
<body>
<?php
$lastname = $_POST["lname"];
$name = $_POST["fname"];
$email = $_POST["email"];
$peyam = $_POST["peyam"];
$a = 1;
echo("file shoma sakhte shod");

while (file_exists($a.".txt")) {
    $a++;}

$myfile = fopen($a.".txt", "w");
fwrite($myfile, $name . "\n");
fwrite($myfile, $lastname . "\n");
fwrite($myfile, $email . "\n");
fwrite($myfile, $peyam . "\n");
fclose($myfile);


?>


</body>


</html>




