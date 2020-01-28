# If

Syntax is 

<pre>
    if (expr)
        statement

The expression is evaluated to its Boolean value. 
- if expression evaluates to TRUE, PHP will execute statement,
- if expression evaluates to FALSE - it'll ignore it. 
</pre>

&nbsp;   
&nbsp;   
&nbsp;   

**Examples:**  
1:
<pre>
$number = 75;
if($number < 100) 
    { 
        echo $number . ' is lower than 100'; 
    }


75 is lower than 100;
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
2:
<pre>
$number = 175;

if($number < 100) 
    { 
        echo $number . ' is lower than 100'; 
    }
else 
    {
        echo $number . ' is greater than 100';
    }


175 is greater than 100;
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
3:

<pre>

$fruits = ['apple', 'banana', 'lime'];

$name = 'apple';
if(in_array($name, $fruits))
{
    echo $name . " exists in " . json_encode($fruits);
}
else
{
    echo $name . " does not exist in " . json_encode($fruits);
}


apple exists in ["apple","banana","lime"] 
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
4:

<pre>
$digits = [];
for($i = 0; $i < 5; $i++)
{
    $digits[$i+2] = $i;
}

for($i = 0; $i <10; $i++)
{
    if(array_key_exists($i, $digits))
        {
            echo "Key [$i] exists in \$digits and has value = $digits[$i]." ;
        }
    else
        {
            echo "Key [$i] does NOT exist in \$digits." ;
        }
        
    echo PHP_EOL;
}



Key [0] does NOT exist in $digits.
Key [1] does NOT exist in $digits.
Key [2] exists in $digits and has value = 0.
Key [3] exists in $digits and has value = 1.
Key [4] exists in $digits and has value = 2.
Key [5] exists in $digits and has value = 3.
Key [6] exists in $digits and has value = 4.
Key [7] does NOT exist in $digits.
Key [8] does NOT exist in $digits.
Key [9] does NOT exist in $digits.
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> ternary.md](../../06/docs/ternary.md)   
[back to contents](../../README.md)    

---