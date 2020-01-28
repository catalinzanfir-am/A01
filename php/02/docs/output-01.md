# echo
&nbsp;   
&nbsp;   

The most basic php instruction is the `echo`.
We use this instruction to output results to CLI:

**E01 Simple output:** [documentation](https://www.php.net/echo)  
You can output directly the string:    

 command                | output
 ---                    | --- 
 `echo "hello world!";` | `hello world!`
 `echo 'hello world!';` | `hello world!`
see [example](../exercises/output-01-1.php)

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

**E02 Concatenate operation** [documentation](https://www.php.net/manual/en/language.operators.string.php#language.operators.string)  
To operator `.` is the basic way to add two strings together:    

command | output
--- | ---
`echo "Ana" . "are mere!";` | `Anaare mere`
see [example](../exercises/output-01-2.php)
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

**E03 Altering spaces**   [documentation](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double)  
`\n` keyword is used for the newline.  
`\t` keyword is used for the tab.   
`PHP_EOL` keyword is the elegant-PHP-way to newline+carriage return.  

<pre>
 command                         output
  
 echo "a" . "\n" . "b";           a
                                  b 
 
 
 echo "a" . "\t" . "b";           a     b
 
 
 echo "a" . PHP_EOL . "b";        a
                                  b
</pre>
see [example](../exercises/output-01-3.php)
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

**E04 Datatypes:**   

datatype | example
---      | ---
`string`  | `'ana'` or `"ana"` or `'true'` or `'100.00'` or `"true"` or `"100"`
`int`    | `1` or `100`
`float`  | `10.365`
`bool`   | `true` or `false`
`array`  | `['ana', 1]`
`NULL`   | `null`

Notice that if anything is between `" "` or `' '` it becomes a string. Take this in consideration when trying to compare datatypes.  
Some datatypes can be forced to be another datatype, but their values are altered in this process. More later.

 command               | output
 ---                   | ---       
`echo "hello world!";` | `hello world!` 
`echo 100;`            | `100` 
`echo "100";`          | `100` 
`echo "true";`         | `true` 
`echo true;`           | `1` 
`echo "false";`        | `false` 
`echo false;`          | ` `
`echo "null;`          | `null`
`echo null;`           | ` ` 
see [example](../exercises/output-01-4.php)  
Notice the difference between `true` and `false` : `1` vs ` `    
Notice that the `null` isn't outputting anything as well.

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   


**E05 Outputting variables**   
Instead of writing the value, you should assign it to a variable, and call the variable instead:   

<pre>
$name = "John";    
$age  = 1;    
$isStudent  = true;    
$isMarried = "true";    
$fingers  = "10";    


command                      output

echo $name;                  John    
echo $age;                   1    
echo $isStudent;             1    
echo $isMarried;             true    
echo $fingers;               10
</pre>
see [example](../exercises/output-01-5.php)
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

**E06 Operations** You can also compute operation directly:

command     | output
---         | ---
`echo 1*5;` | `5`   
`echo 1+2;` | `3`
`echo 3/2;` | `1.5`

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   



**E07 Stringception**  
- Strings written in `""` will evaluate the variables.     
- Strings written in `''` will NOT evaluate the variables.  
- When the string is within another string, you have to escape it by enclosing it between ` { } `
- Notice the different output between `" " ` and `' '`.  

<pre>
$name = "John";

command                                   output 
 
echo  "Eu, " . $name . " am mere.";       Eu, John am mere.
echo  'Eu, ' . $name . ' am mere.';       Eu, John am mere.

echo  "Eu, $name am mere.";               Eu, John am mere.
echo  'Eu, $name am mere.';               Eu, $name am mere.

echo  "Eu$nameam mere.";                  Notice: Undefined variable: nameam
echo  'Eu{$name}am mere.';                EuJohnam mere
</pre>
see [example](../exercises/output-01-7.php)
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
**[next >> output-02.md](./output-02.md)**  
[back to contents](../../README.md)   

---