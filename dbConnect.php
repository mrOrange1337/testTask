<?

$host = "localhost";
$dbname = "testTask";
$user = "root";
$password = "";

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}
catch(PDOException $e) {
    echo $e->getMessage();
}