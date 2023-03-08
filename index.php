<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Béldy Ádám</title>
</head>
<body>
	<table>
		<?php
			echo "<tr><td class=\"sor-label\"></td>";
			for ($oszlop = 1; $oszlop <= 8; $oszlop++) {
				$letter = chr(ord('a') + $oszlop - 1);
				echo "<td class=\"oszlop-label\">$letter</td>";
			}
			echo "</tr>";

			for ($sor = 1; $sor <= 8; $sor++) {
				echo "<tr>";
				$number = 9 - $sor;
				echo "<td class=\"sor-label\">$number</td>";
				for ($oszlop = 1; $oszlop <= 8; $oszlop++) {
					$class = (($sor + $oszlop) % 2 == 0) ? 'feher' : 'fekete';
					echo "<td class=\"$class\">&nbsp;</td>";
				}
				echo "</tr>";
			}
		?>
		<tr><td class="sor-label"></td>
			<?php
				for ($oszlop = 1; $oszlop <= 8; $oszlop++) {
					$letter = chr(ord('a') + $oszlop - 1);
					echo "<td class=\"oszlop-label\">$letter</td>";
				}
			?>
		</tr>
	</table>
</body>
</html>
