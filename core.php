<?
function getCountriesFromDB()
{
	$items = [];
	global $db;
	$stmt = $db->prepare("SELECT * FROM countries");
	if ($stmt->execute()) {
  	while ($row = $stmt->fetch()) {
		$items[] = $row;
  }
}
return $items;
}
?>
