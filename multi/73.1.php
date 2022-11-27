<?php
$citys = [
            [
                'country' => 'Россия',
                'city' =>    'Москва',
            ],
            [
                'country' => 'Беларусь',
                'city' =>    'Минск',
            ],
            [
                'country' => 'Россия',
                'city' =>    'Питер',
            ],
            [
                'country' => 'Россия',
                'city' =>    'Владивосток',
            ],
            [
                'country' => 'Украина',
                'city' =>    'Львов',
            ],
            [
                'country' => 'Беларусь',
                'city' =>    'Могилев',
            ],
            [
                'country' => 'Украина',
                'city' =>    'Киев',
            ],
        ];
$result = [];
foreach ($citys as $city) {
    $result[$city['country']][] = $city['city'];
}
print_r($result);
?>