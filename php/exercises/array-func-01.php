<?php
/**
 * Command to run is:
 * php php/exercises/array-func-01.php
 */

$fruits =
    [
        'red' =>
            [
                'apple',
                'cranberry',
                'strawberry'
            ],
        'yellow'=> 'banana',
        'green' => 'lime'
    ];

var_dump(array_key_exists('red', $fruits));
var_dump(array_key_exists('Red', $fruits));