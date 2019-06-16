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
  {		
	  echo "<tr>";
	  echo "<td>".htmlspecialchars($country['id'])."</td>";
	  echo "<td>".htmlspecialchars($country['countryName'])."</td>";
	  echo "</tr>";
  }
  ?>
  </tbody>
</table>

<form action='/action.php' method='POST'>
  <div class='inputArea' >
	<input placeholder='Введите название страны' pattern="^[А-ЯЁA-Z]{1}[a-zа-яё\s]+$" name='countryName' type='text' class='form-control' required>
	<button type='submit' class='btn btn-primary'>Добавить</button>
  </div>
  <small class="form-text text-muted">Только латинские или кириллические символы начиная с заглавной буквы</small>
</form>
</div>

<?
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>