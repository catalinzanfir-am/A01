# For

Syntax is 

<pre>
  for (expr1; expr2; expr3)
      { statement }
      
  - expr1 is evaluated (executed) once unconditionally at the beginning of the loop.
  - expr2 is evaluated in the beginning of each iteration. 
      - If it evaluates to TRUE, the loop continues and the nested statement(s) are executed. 
      - If it evaluates to FALSE, the execution of the loop ends.
  - expr3 is evaluated (executed) at the end of each iteration.
</pre>

&nbsp;   
&nbsp;   
&nbsp;   

**Examples:**


<pre>
for($i = 0; $i <=10 ; $i++)
{
    echo $i;
}


012345678910
</pre>



&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

Populating a 3x3 matrix
<pre>
$array = [];

for($i = 0; $i <=2 ; $i++)
{
    for($j = 0; $j <=2; $j++)
            {
                $array[$i][$j] = $i + $j;
            }
}

print_r($array);

Array
(
    [0] => Array
        (
            [0] => 0
            [1] => 1
            [2] => 2
        )

    [1] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
        )

    [2] => Array
        (
            [0] => 2
            [1] => 3
            [2] => 4
        )

)
</pre>

&nbsp;   
&nbsp;   

Printing the output as a matrix:
<pre>
for($i = 0; $i <=2 ; $i++)
{
    for($j = 0; $j <=2; $j++)
    {
        echo $i + $j . "\t";
    }
    echo "\n";
}



0       1       2
1       2       3
2       3       4
</pre>

&nbsp;   
&nbsp;   

Example with dynamic size
<pre>
$fruits = ['banana', 'apple', 'cranberry', 'lemon', 'tomato' , 'pear'];
$sizeOfArray = count($fruits);


for($index = 0; $index < $sizeOfArray; $index++)
{
    print_r($fruits[$index]);
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
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> foreach.md](../../05/docs/foreach.md)   
[back to contents](../../README.md)    

---
