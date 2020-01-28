# Common used string functions 

`$name = 'Adore Me (SRL)';`

Most used string functions:

&nbsp;  

**get length of string:**

command | output  
--- | ---
`echo strlen($name);` | `14`

&nbsp;  

**transform string to lowercase:**

command | output  
--- | ---
`echo strtolower($name);` | `adore me (srl)`

&nbsp;  

**transform string to uppercase:**

command | output  
--- | ---
`echo strtoupper($name);` | `ADORE ME (SRL)`

&nbsp;  

**replace 1(or more) characters inside a string**

command | output  
--- | ---
`echo str_replace('e','ZZ',$name);` | `AdorZZ MZZ (SRL)`

&nbsp;  

**get the position of 1(or more) chars:** 

command | output  
--- | ---
`echo strpos($name,'re');` | `3`
* Because the counting starts at 0.

&nbsp;  

**create a substring from a string:** 

command | output  
--- | ---
`echo substr($name,3);` | `re Me (SRL)`

&nbsp;  

**Transform string in array:** 

<pre>
string = "mere 2 batran";
$list = explode(' ', string);  // ' ' is the glue, what will be separated each value from array

var_dump($list);


Array
(
    0 => mere
    1 => 2
    2 => batran
)
</pre>


&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> for.md](../../05/docs/for.md)   
[back to contents](../../README.md)    

---