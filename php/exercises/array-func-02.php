<?php
/**
 * Command to run is:
 * php php/exercises/array-func-02.php
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


var_dump(in_array('banana', $fruits));
var_dump(in_array('yellow', $fruits));
var_dump(in_array('apple', $fruits));
var_dump(in_array('apple', $fruits['red']));