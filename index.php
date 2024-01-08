<?php

// es 1

$arrayUno = [1,2,3,4,5,6];

$sum = 0;

foreach ($arrayUno as $key => $num) {
    if ($num % 2 == 0) {
        $sum = $sum + $num;
    }
}

/*echo "La sommma dei nuemeri pari è uguale a " . $sum;
echo "\n La somma dei numeri pari è uguale a {$sum}";*/

// es 2

$users = [
    [
        'name' => 'Claudio',
        'surname' => 'Pozzi',
        'gender' => 'NB',       
    ],
    [
        'name' => 'Francesca',
        'surname' => 'Sanna',
        'gender' => 'F',       
    ],
    [
        'name' => 'Marco',
        'surname' => 'Manetti',
        'gender' => 'M',       
    ]
];

foreach ($users as $key => $user) {
    switch ($user['gender']) {
        case 'NB':
            echo "Buongiorno {$user['name']} {$user['surname']} \n";
            break;
        case 'F':
            echo "Buongiorno Sig.ra {$user['name']} {$user['surname']} \n";
            break;
        case 'M':
            echo "Buongiorno Sig. {$user['name']} {$user['surname']}";
            break;
    }
}

// es 3

$arr = [];
$i = 1;
$maxNum = 100;

while ($i <= $maxNum){
    $arr[] = $i;
    $i++;
}

foreach ($arr as $num) {
    switch ($num) {
        case $num % 15 == 0:
            echo "HACKADEMY122 \n";
            break;
        case $num % 5 == 0:
            echo "JAVASCRIPT \n";
            break;
        case $num % 3 == 0:
            echo "PHP \n";
            break;
        default:
            echo "{$num} \n";
    }
}