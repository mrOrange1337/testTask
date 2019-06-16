<?
function getCountriesFromDB()
{
	$items = [];
	global $db;
	//Prepared query for safety 
	$stmt = $db->prepare("SELECT * FROM countries");
	if ($stmt->execute()) {
  	while ($row = $stmt->fetch()) {
		$items[] = $row;
  }
}
return $items;
}

function putCountryToDB($countryName)
{
	if(isset($countryName))
	{
	global $db;
	$stmt = $db->prepare("INSERT INTO countries (countryName) VALUES (?)");
	$stmt->bindParam(1, $countryName);
	$stmt->execute();
	}
}

?>
