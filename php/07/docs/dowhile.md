# dowhile

Syntax is 

<pre> 
        do {
            statement
        }
        while (expr)
           
it works a lot like the while except that the truth expression is checked at the end of each iteration instead of in the beginning. 
The statement will run at least once.
</pre>


&nbsp;   
&nbsp;   
&nbsp;   

**Examples:**

1:
<pre>
do {
    echo 'Executed infinitely.' . PHP_EOL;
} while (true)
</pre>

output:
<pre>
    'Executed infinitely.'
    'Executed infinitely.'
    'Executed infinitely.'
    'Executed infinitely.'
    'Executed infinitely.'
    ....
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

2:
<pre>
$i = 10;

do {
    echo $i . "\t";
    $i--;
} while($i);
</pre>

<pre>
10      9       8       7       6       5       4       3       2       1
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

3:
<pre>
$i = 10;

do {
    echo $i . "\t";
    $i--;
} while(false);
</pre>

<pre>
10
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> switch.md](../../08/docs/switch.md)   
[back to contents](../../README.md)    

---