# Arrays - 02
&nbsp;   
&nbsp;   


The key-value pair is set with the `=>` keyword.   

**E01**  
Previous example:   
`$fruits = ['apple', 'banana', 'lime'];`


We can modify it, and add your own keys, and in our case, the keys will be colours:  
<pre>
$fruits = [
    'red' => 'apple',
    'yellow '=> 'banana',
    'green' => 'lime'
];

print_r($fruits);

Array
(
    [red] => apple
    [yellow ] => banana
    [green] => lime
)
</pre>
see [example](../exercises/array-02-1.php)

&nbsp;   
&nbsp;   

Notice that we no longer have the numerical (`0`,`1`,`2`) keys, and instead we have the (`red`, `green`, `yellow`) keys.   
Again, in order to output a single value of the array, you have to address the array with the wanted key enclosed in the `[ ]` keyword:  

&nbsp;   

Our previous example: `$fruits[0]` or `$fruits[1]` will no longer work, since we dont have those keys.   
However,   
`print_r($fruits['red']);` will output `apple`.   
`print_r($fruits['yellow']);` will output `banana`. 

&nbsp;   

Arrays have keys that are case-sensitive, which means `$fruits['red']` isn't the same with `$fruits['Red']` or `$fruits['RED']`;

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> output-03.md](../../02/docs/output-03md)  
[back to contents](../../README.md)    

---