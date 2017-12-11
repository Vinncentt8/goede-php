<!DOCTYPE html>
<html>
<head>
	<title>Goede</title>
</head>
<body>
	
	<?php
		include 'index.html';
		//date_default_timezone_set('CET');
		$morning = "6:00";
		$afternoon = "12:00";
		$evening = "18:00";
		$night= "24:00";

    	$hour = date("H", time());

		if($hour > 10)
		{
 		if($hour >= $morning && $hour <= $afternoon){
			echo date("H:i", time());

    		echo  '<img src="img/morning.png" class="image">';
    		

    		/*$doc->loadHTML($html);
			//get the element you want to append to
			$descBox = $doc->getElementById('one');
			//create the element to append to #element1
			$appended = $doc->createElement('p', 'Het is nu ' + $hour + '!');*/
    	}

    	if($hour >= $afternoon && $hour <= $evening){
    		echo date("H:i", time());

    		echo '<img src="img/afternoon.png" class="image">';
    		

    		/*$doc->loadHTML($html);
			//get the element you want to append to
			$descBox = $doc->getElementById('one');
			//create the element to append to #element1
			$appended = $doc->createElement('p', 'Het is nu ' + $hour + '!');*/
    	}

    	if($hour >= $evening && $hour <= $night){
    		echo date("H:i", time());

    		echo'<img src="img/evening.png" class="image">';
    		

    		/*$doc->loadHTML($html);
			//get the element you want to append to
			$descBox = $doc->getElementById('one');
			//create the element to append to #element1
			$appended = $doc->createElement('p', 'Het is nu ' + $hour + '!');*/
    	}

    	if ($hour >= $night && $hour <= $morning){
    		echo date("H:i", time());

    		echo'<img src="img/night.png" class="image">';
    		

    		/*$doc->loadHTML($html);
			//get the element you want to append to
			$descBox = $doc->getElementById('one');
			//create the element to append to #element1
			$appended = $doc->createElement('p', 'Het is nu ' + $hour + '!');*/
    	}
    }

		?>

</body>
</html>