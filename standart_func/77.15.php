<?php
$year = date('y');
$friday = 0;
$friday_date = '';
for($month = 1; $month <= 12; $month++){
	$days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
	for($day = 1; $day <= $days_in_month; $day++){
	    $d = date('w', mktime(0, 0, 0, $month, $day, $year));
	    if($d == 5){
		    if( date('d', mktime(0, 0, 0, $month, $day, $year)) == 13){
			   $friday++; 
			   $friday_date .= date('d.m.Y', mktime(0, 0, 0, $month, $day, $year)).'<br>';
		    }
	    }
	}
}
echo "В $year году 'пятниц 13-го' - $friday<br>Они выпадают на числа:<br>$friday_date";
?>