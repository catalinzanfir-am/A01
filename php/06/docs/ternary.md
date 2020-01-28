# ternary operator: an IF but smaller

Syntax is 

<pre>
(expr1) ? (expr2) : (expr3)

The expression evaluates to expr2 if expr1 evaluates to TRUE, and expr3 if expr1 evaluates to FALSE.

</pre>

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   


**Examples:** 

1:
<pre>
$answer = 4 + 7 > 10  ? "yes" : "no";
echo $answer


"yes"
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


 OR 
 
echo $number . " is " . ($number < 100 ? "lower" : "greater") . " than 100";



175 is greater than 100;
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> while.md](../../07/docs/while.md)   
[back to contents](../../README.md)    

---