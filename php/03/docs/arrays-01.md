# Arrays - 01
&nbsp;   
&nbsp;   

Arrays:
 - are defined by either: 
   -  the default one: `$array = array('1')`
   - or if you have > php 6 `$array = ['1']`
 - elements in array are separated by `,`

&nbsp;   




**E01**
<pre>
$fruits = ['apple', 'banana', 'lime'];  
print_r($fruits) 


Output:
Array
(
    [0] => apple
    [1] => banana
    [2] => lime
)
</pre>
see [example](../exercises/array-01-1.php)
&nbsp;   
&nbsp;   




Key notes:
1. Arrays are defined by pairs of `key` and `value`;   
2. Arrays always start at `0` (unless manually naming their key.)
3. When dealing with simple arrays you have to remember that default keys start at `0`. 
3. In order to output a single value of the array, you have to address the array with the wanted key enclosed in the `[ ]` keyword:  
Examples that work: `$array[0]` or `$array[1]`   
Examples that dont work: `$array(0)`, `$array{0}`, `$array<0>`


`print_r($fruits[0]);` will output `apple`  
`print_r($fruits[1]);` will output `banana` 

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> arrays-02.md](../../03/docs/arrays-02.md)  
[back to contents](../../README.md)    

---

