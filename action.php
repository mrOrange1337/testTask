<?
include_once $_SERVER['DOCUMENT_ROOT'].'/dbConnect.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/core.php';

putCountryToDB($_POST["countryName"]);
header("Location: /");
?>
