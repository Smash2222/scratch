<?php

$arr = [
    [
        'name' => 'Petro',
        'count' => 10,
        'email' => 'petro@ukr.net',
    ],
    [
        'name' => 'Ivan',
        'count' => 110,
        'email' => 'ivan@ukr.net',
    ],
    [
        'name' => 'Sergiy',
        'count' => 40,
        'email' => 'serg@ukr.net',
    ]
];

file_put_contents('data.json',json_encode($arr));