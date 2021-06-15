<?php


trait message1{
    public  function msg1(){
        echo "OOP is fun";
    }
}

trait message2{
    public  function msg2(){
        echo "OOP is fun2";
    }
}

class welcome{
    use message1;
    use message2;
}
class wel2{
    use message2;
}

$a=new welcome();
$a->msg1();
$a->msg2();
$b=new wel2();
$b->msg2();