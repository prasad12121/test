<?php
class domain{

    public static  function abc()
    {
        echo "hi prasad";

    }

}
class child
{
    public function msg()
    {
        domain::abc();
    }

}

$a=new child();
$a->msg();