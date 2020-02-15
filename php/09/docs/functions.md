# Functions

<pre>
function yellName($name)
{
    echo 'MY NAME IS: ' . $name . PHP_EOL;
}

$names = ['Marie', 'Mary', 'Mariah', 'John'];

foreach($names as $name)
{
    yell($name);
}
</pre>


<pre>


function add($a, $b) { echo $a + $b; }
function substract($a, $b) { echo $a - $b; }
function divide($a, $b) {echo $a / $b; }
function multiply($a, $b) {echo $a * $b; }

function calculator($a, $b, $sign)
{
    switch($sign) {
        case '+':
            add($a, $b);
            break;
        case '-':
            substract($a, $b);
            break;
        case '*':
            multiply($a, $b);
            break;
        case '/':
            divide($a, $b);
            break;
        default:
            print_r("Operation {$sign} not recognized");
    }
}

function compute($operation)
{
    $operators = str_split($operation);

    calculator($operators[0],$operators[2],$operators[1]);
}
echo PHP_EOL.PHP_EOL;



compute('2+8');

echo PHP_EOL.PHP_EOL;
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
[next >> functions.md](../../09/docs/functions.md)   
[back to contents](../../README.md)    

---