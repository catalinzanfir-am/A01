# print_r and var_dump
&nbsp;   
&nbsp;   

**E01 echo print_r var_dump :** 
Other ways to output value is by: [`print_r()`](https://www.php.net/manual/en/function.print-r) or [`var_dump()`](https://www.php.net/manual/en/function.var-dump)   

 command                    | output
 ---                        | --- 
`print_r("hello world!");`  | `hello world!`
`var_dump("hello world!);"` | `string(12) "hello world!"`
`print_r("100");`           | `100`
`var_dump("100");`          | `string(3) "100"`
`print_r(100);`             | `100`
`var_dump(100);`            | `int(100)`
`print_r(true);`            | `1`
`var_dump(true);`           | `bool(true)`
`print_r(false);`           | ` `
`var_dump(false);`          | `bool(false)`
`print_r(['1',2]);`         | `Array ( [0] => 1   [1] => 2 )`
`var_dump(['1',2]);`        | `array(2) { [0]=> string(1) "1" [1]=> int(2) }`
`echo ['1',2];`             | `PHP Notice: Array to string conversion`
see [example](../exercises/output-02-1.php)  
Notice that the output of `var_dump` is a bit more explicit, including the type of the variable.

Conclusion:
- using `echo` instruction is ok for simple datatypes: string, int, bool.
- using `echo` is not valid for outputting arrays or objects
- use `var_dump` for when you want to know everything about the variable; (mostly when dealing with arrays or objects).
- use `print_r` if you dont care about datatypes, as they can clobber your screen.


&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

**E02 echo print_r var_dump :** 
Lets define our array as:   
`$array = array('one', 'two', 'three');` 

command | output
--- | ---
`echo $array;` | `PHP Notice: Array to string conversion`

That's not what we expected, but it is what PHP will output when we will try to output other things than integers, booleans or strings.
Thats because the `echo` instruction will try to force convert the value to a string value. Echo isn't capable of outputting complex values;


command | output
--- | ---
`echo json_encode($array);` | `['one', 'two', 'three']`

see [example](../exercises/output-02-2.php)

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
[next >> arrays-01.md](../../03/docs/arrays-01.md)  
[back to contents](../../README.md)    

---

