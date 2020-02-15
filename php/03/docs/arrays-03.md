# Arrays - 03
&nbsp;   
&nbsp;   

Working with complex arrays;  

But i know more fruits with red colour.

**E01:**  
<pre> 
$fruits = 
  [
    'red' => 
        [
            'apple',
            'cranberry',
            'strawberry'
        ],
    'yellow' => 'banana',
    'green' => 'lime'
  ];


print_r($fruits); //output


Array
    (
        [red] => Array
            (
                [0] => apple
                [1] => cranberry
                [2] => strawberry
            )
        [yellow] => banana
        [green] => lime
    )

</pre>
see [example](../exercises/array-03-1.php)

&nbsp;   

Notice that we now have  for the `red` key an array associated, which has numerical keys, because we didnt manually set them.

<pre>
print_r($fruits['red']);

Array
    (
        [0] => apple
        [1] => cranberry
        [2] => strawberry
    )
</pre>

To get the value of our first red coloured fruit we:
<pre>
print_r($fruits['red'][0]);

apple
</pre> 

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---
[next >> array-functions.md](../../04/docs/array-functions.md)   
[back to contents](../../README.md)    

---