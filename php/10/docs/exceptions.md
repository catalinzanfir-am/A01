# Exceptions

<pre>
class Forbidden extends Exception {
    protected $message = "forbidden";
}

class Unauthorized extends Exception {
    protected $message = "unauthed";
}

class Conflict extends Exception {
    protected $message = "conflict";
}

function throwErr($i)
{
    switch($i)
    {
        case 1:
            throw new Forbidden();
            break;
        case 2:
            throw new Unauthorized();
            break;
        case 3:
            throw new Conflict();
            break;
    }
}


try{
    throwErr(3);
}


catch (Forbidden $exception) {
    echo "s-a aruncat forbidden " . $exception->getMessage();
}
catch (Unauthorized $exception){
    echo "s-a aruncat unath " . $exception->getMessage();
}
catch (Exception $exception)
{
    echo "s-a aruncat exceptie netratata local " . $exception->getMessage();
}
</pre>

&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   
&nbsp;   

---

[back to contents](../../README.md)    

---