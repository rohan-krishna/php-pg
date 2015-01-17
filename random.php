<?php require_once 'header.php';

$statecode = $areacode = $generated_string = '';

function RandomString($prefix,$areacode) 
{
	$integers='0123456789';
	$RandomString = '';

	for($i = 0; $i < 4; $i++)
	{
		$RandomString .= $integers[rand(0,9)];
	}

	$randomNumber = 'Generated Random VIN : <strong> ' . $prefix . ' - ' . $areacode . ' - ' . $RandomString . '</strong>';

	return $randomNumber;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$statecode = trim($_POST["statecode"]);
	$areacode = trim($_POST["areacode"]);

	$generated_string = RandomString($statecode,$areacode);
}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<label>State Code: </label>
	<input type="text" maxlength="2" name="statecode" placeholder="State Code In Two Words" style="text-transform: uppercase;" required="required" value="<?php echo $statecode; ?>" />

	<label>Area Code: </label>
	<input type="text" maxlength="2" name="areacode" placeholder="Area Code" style="text-transform: uppercase;" required="required" value="<?php echo $areacode; ?>"/>

	<input type="submit" value="Generate" name="submit">
</form>

<div class="panel panel-default">
  <div class="panel-body">
     <h3 style="text-transform: uppercase;"><?php echo $generated_string; ?></h3>
  </div>
</div>

