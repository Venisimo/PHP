<?php
	$products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];
    foreach ($products as $product) {
        echo " продукт: ". $product['name']. ', цена: ' . $product['price']. ', количесвто: ' . $product['amount'].'<br>';
    }
?>