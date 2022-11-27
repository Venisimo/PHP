<?php
$dates = [
	'2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
	'2019-12-30'=> ['name5', 'name6', 'name7'],
	'2019-12-31'=> ['name8', 'name9'],
];
$result = [];
	
foreach ($dates as $date => $events) {
    foreach ($events as $event) { 
    $result[] = [
        'date' => $date,
        'event' => $event
    ];
}
}

var_export($result);
?>