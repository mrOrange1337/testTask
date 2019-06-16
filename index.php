<?
include_once $_SERVER['DOCUMENT_ROOT'].'/dbConnect.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/core.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
$countries = getCountriesFromDB();
?>

<div class="wrapper">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название страны</th>
    </tr>
	</thead>
  <tbody>
  <?
  foreach($countries as $country)
  {		echo "<tr>";
	  echo "<td>".$country['id']."</td>";
	  echo "<td>".$country['countryName']."</td>";
	  echo "</tr>";
  }
  ?>
  	</tbody>
	</table>
</div>

<?
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>