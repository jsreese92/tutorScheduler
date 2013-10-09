<html>
<head>
<title>PHP Response</title>
<link rel='stylesheet' type='text/css' href='stylesheet.css'>
</head>
<body>

<table>
<tbody>

<?php
	for($d=0; $d<7; $d++) {
		echo '<tr>';
		switch ($d) {
			case 0:
				$day = 'sun';
				break;
			case 1:
				$day = 'mon';
				break;
			case 2:
				$day = 'tue';
				break;
			case 3:
				$day = 'wed';
				break;
			case 4:
				$day = 'thu';
				break;
			case 5:
				$day = 'fri';
				break;
			case 6:
				$day = 'sat';
				break;
		}
		echo '<td>'.$day.'</td>';
		for($i=7; $i<24; $i++) {
			if($i<10) {
				$val = $day.'0'.$i;
				echo "<td>".$_POST[$val]."</td>";
			}else {
				$val = 'sun'.$i;
				echo "<td>".$_POST[$val]."</td>";
			}
		}
		echo '</tr>';
	}
?>

</tbody>
</table>

</body>
</html>