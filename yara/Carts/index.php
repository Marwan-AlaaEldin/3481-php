<?php
$carts = [
    [
        "id" => 1,
        "userId" => 33,
        "total" => 103774.85,
        "products" => [
            [
                "id" => 168,
                "title" => "Charger SXT RWD",
                "price" => 32999.99,
                "quantity" => 3
            ],
            [
                "id" => 78,
                "title" => "Apple MacBook Pro 14 Inch Space Grey",
                "price" => 1999.99,
                "quantity" => 2
            ]
        ]
    ],
    [
        "id" => 2,
        "userId" => 142,
        "total" => 4794.8,
        "products" => [
            [
                "id" => 144,
                "title" => "Cricket Helmet",
                "price" => 44.99,
                "quantity" => 4
            ],
            [
                "id" => 124,
                "title" => "iPhone X",
                "price" => 899.99,
                "quantity" => 4
            ]
        ]
    ]
];


$carts_json = json_encode($carts);
echo $carts_json;