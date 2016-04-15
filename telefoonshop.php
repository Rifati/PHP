<?php
	include 'Telefoon.php';
	include 'Telefoonlijst.php';
	
	$lijst = new Telefoonlijst();
	$lijst = $lijst->getLijst();
	
?>
<style>
	body {
		text-align: center;
		background-image: url("telefoonplaatjes/wallpaper.jpg");
	}
	form * {
		margin: 5px;
		text-align: center;
	}
	img {
		width: 150px;
		height: 150px;
	}
	div {
		display: inline-block;
		margin: 25px;
		padding: 5px 20px;
		border: 3px solid black;
		border-radius: 50px;
		font: 16px "Comic Sans MS";
		color: red;
		background-color: rgba(0, 0, 0, 0.75);
	}
</style>

<body>
	<form method="post">
		<br><input type="text" name="min" placeholder="Minimum prijs">
		<br><input type="text" name="max" placeholder="Maximum prijs">
		<br>
		<select name="merk">
			<option value="alle">Alle merken</option>
			<?php
				$merken = array();
				foreach ($lijst as $telefoon) {
					if (!in_array($telefoon->getMerk(), $merken)) {
						array_push($merken, $telefoon->getMerk());
					}
				}
				foreach ($merken as $merk) {
					echo "<option value=".$merk.">".$merk."</option>";
				}
			?>
		</select>
		<input type="submit" name="submit" value="OK">
	</form>

	<?php
		foreach ($lijst as $telefoon) {
			if (
				!isset($_POST["submit"])
				|| (
					isset($_POST["submit"])
					&& ($telefoon->getPrijs() >= $_POST["min"] || $_POST["min"] == "")
																																																																																																																																								&& ($telefoon->getPrijs() <= $_POST["max"] || $_POST["max"] == "")
																																																																																																																																								&& ($telefoon->getMerk() == $_POST["merk"] || $_POST["merk"] == "alle")
				)
			) {
				echo "<div>";
					echo $telefoon->getMerk()." ".$telefoon->getType()."<br>";
					echo "€ ".$telefoon->getPrijs().",-<br>";
					echo "<img src='webshop/".$telefoon->getFotoURL()."'><br><br>";
				echo "</div>";
			}
		}
	?>
</body>