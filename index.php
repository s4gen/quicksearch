<html>

<head>
	<title>Index</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<?php
echo '<label>Quick Search: <input id="search" type="text"></label>';
echo '<table>';

$handle = fopen("mijloacefixe.txt", "r");
$i=1;
if ($handle) {
    while (($line = fgets($handle)) !== false) 
	{
        echo '<tr id="',$i,'"><td>';
		echo $line;
		echo '</td>';
		echo '</tr>';
		$i++;	
		// process the line read.
    }

	echo '</table>';
    fclose($handle);
	}

?>

<script src='main.js'></script>

</html>