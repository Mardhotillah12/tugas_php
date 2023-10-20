<?php

// Nomor 1 Praktek Individu 2 

for ($i = 0; $i <= 8; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";

}
?>


<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compaible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Praktek Individu</title>
</head>
	
<body>
<br>
	<table border=1>
		<tr style="background-color:#00c0ef;">
			<td>No</td>
			<td>Nama</td>
			<td>Kelas</td>
		</tr>
	<tbody>
		<?php
		$count = 10;
		for($i = 1; $i <= 10; $i++){ ?>

		<?php
		if ($i % 2==0){
			$color = "white";
		}else{
			$color = "#ddd";
		}
		?>
		<tr style="background-color:<?php echo $color ?>">
			<td>
				<?php echo $i ?>
			</td>
			<td>
				<?php echo "Nama ke $i" ?>
			</td>
			<td>
				<?php echo "Kelas ke $count"; $count--; ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
</body>

</html>
