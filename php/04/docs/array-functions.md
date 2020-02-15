# Common used array functions

<pre> $fruits = 
    [
        'red' => 
                [
                    'apple',
                    'cranberry',
                    'strawberry'
                 ],
        'yellow '=> 'banana',
        'green' => 'lime'
    ];
</pre>

&nbsp;

**Check if an array has a key:**  

command | output
--- | ---
`var_dump(array_key_exists('red', $fruits));` | `bool(true)`
`var_dump(array_key_exists('Red', $fruits));` | `bool(false)`
see [example](../exercises/array-func-01.php)

&nbsp;

**Check if an array has a value:** 

command | output
--- | ---
`var_dump(in_array('banana', $fruits));`       | `bool(true)`
`var_dump(in_array('yellow', $fruits));`       | `bool(false)`
`var_dump(in_array('apple', $fruits));`        | `bool(false)`
`var_dump(in_array('apple', $fruits['red']));` | `bool(true)`
see [example](../exercises/array-func-01.php)

&nbsp;

**Get the key of a value in array:**   

command | output
--- | ---
`var_dump(array_search('banana', $fruits));`           | `string(7) "yellow"`
`var_dump(array_search('bananax',$fruits););`          | `bool(false)`
`var_dump(array_search('strawberry',$fruits['red']));` | `int(2)`

&nbsp;   

**Transform json to array**

<pre>$a = json_decode("{'ana':'mere', 'ion': 2}"));
print_r($a)


Array 
(
    ana => mere
    ion => 2
)
</pre>

&nbsp;

**Transform array in string:** 

<pre>
$list = ['ana' => 'mere', 'ion' => 2, 'mircea' => 'batran'];
$string = implode(' ', $list);  // ' ' is the glue, what will be separated each value from array

var_dump($string);


string(13) "mere 2 batran"  // only the values are glued togheter, the keys are not.
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> string-functions.md](../../04/docs/string-functions.md)   
[back to contents](../../README.md)    

---