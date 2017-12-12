	<?php
		//date_default_timezone_set (GMT+8);
		$morning = 6;
		$afternoon = 12;
		$evening = 18;
		$night= 0;
    	$hour = date("H", time());
	
 		if($hour >= $morning && $hour < $afternoon){
			$class = "morning";
			echo "<p>Goede Morgen! <br>Het is nu: " . date("H:i", time()) . "</p>" ;
    	}

    	if($hour >= $afternoon && $hour < $evening){
    		$class = "afternoon";
    		echo "<p>Goede Middag! <br>Het is nu: " . date("H:i", time()) . "</p>";
    	}

    	if($hour >= $evening && $hour < $night){
    		$class = "evening";
    		echo "<p>Goede Avond! <br>Het is nu: " . date("H:i", time()) . "</p>";
    	}

    	if($hour >= $night && $hour < $morning){
    		$class = "night";
    		echo "<p>Goede Nacht! <br>Het is nu: " . date("H:i", time()) . "</p>";
    	}

		?>
<!DOCTYPE html>
<html>
<head>
	<title>Goede</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="<?=$class?>">

	


</body>
</html>