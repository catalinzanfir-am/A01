# foreach

The foreach construct provides an easy way to iterate over arrays.  
Foreach works only on arrays and objects, and will issue an error when you try to use it on a variable with a different data type or an uninitialized variable.  
There are two syntaxes:

<pre>
    foreach (array_expression as $value)
        statement

This loops over the array given by array_expression.
 On each iteration, the value of the current element is assigned to $value and the internal array pointer is advanced by one (so on the next iteration, you'll be looking at the next element).


    
    foreach (array_expression as $key => $value)
        statement
 
 The second form will additionally assign the current element's key to the $key variable on each iteration.

</pre>

&nbsp;   
&nbsp;   



**Examples:**

<pre>
$fruits = ['banana', 'apple', 'cranberry', 'lemon', 'tomato' , 'pear'];


foreach($fruits as $fruit)
{
    print_r($fruit);
    echo PHP_EOL;
}


banana
apple
cranberry
lemon
tomato
pear
</pre>


&nbsp;  
&nbsp;  

<pre>
$numbers = [0,1,2,3,4,5,6,7,8,9,10];

foreach($numbers as $number)
{
    echo $number
}

012345678910
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   


Printing the output as a matrix:
<pre>
$numbers = [0,1,2];
foreach($numbers as $x)
{
    foreach($numbers as $y)
    {
        echo $x + $y . "\t";
    }
    echo "\n";
}



0       1       2
1       2       3
2       3       4
</pre>


&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   


<pre>
$fruits = ['banana', 'apple', 'cranberry', 'lemon', 'tomato' , 'pear'];


foreach($fruits as $key => $value)
{
    echo '$fruits[' . $key . '] = ' . $value;
    echo PHP_EOL;
}


$fruits[0] = banana
$fruits[1] = apple
$fruits[2] = cranberry
$fruits[3] = lemon
$fruits[4] = tomato
$fruits[5] = pear
</pre>



<pre> 
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


foreach($fruits as $key => $value)
{
    print_r('$fruits[' . $key . '] = ' . json_encode($value));
    echo PHP_EOL;
}


$fruits[red] = ["apple","cranberry","strawberry"]
$fruits[yellow] = "banana"
$fruits[green] = "lime"
</pre>


&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> if.md](../../06/docs/if.md)   
[back to contents](../../README.md)    

---