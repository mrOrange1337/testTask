<?
include_once $_SERVER['DOCUMENT_ROOT'].'/dbConnect.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/core.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
$countries = getCountriesFromDB();
?>




<?
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>