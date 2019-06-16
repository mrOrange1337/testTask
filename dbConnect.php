<?
//DB creditinals
$host = "localhost";
$dbname = "testTask";
$user = "root";
$password = "";

//PDO DB connection 
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}
catch(PDOException $e) {
    echo $e->getMessage();
}