# while

Syntax is 

<pre> 
        while (expr)
            statement
            
PHP will execute the nested statement(s) repeatedly, as long as the while expression evaluates to TRUE.
  - The value of the expression is checked each time at the beginning of the loop,so even if this value changes during the execution of the nested statement(s), execution will not stop until the end of the iteration (each time PHP runs the statements in the loop is one iteration).
  - If the while expression evaluates to FALSE from the very beginning, the nested statement(s) won't even be run once.
</pre>

&nbsp;   
&nbsp;   
&nbsp;   

**Examples:**

1:
<pre>
while(true)
{
    echo 'Executed infinitely.' . PHP_EOL;
}
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


2:
<pre>
$i = 10;
while($i)
{
    echo $i . PHP_EOL;
    $i--;
}
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

while(false) {
    echo $i . "\t";
    $i--;
}
</pre>

<pre>

</pre>

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> dowhile.md](../../07/docs/dowhile.md)   
[back to contents](../../README.md)    

---
