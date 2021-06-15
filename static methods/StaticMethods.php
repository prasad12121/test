<?php


class greets{
    public  static function welcome()
    {

        echo "hello prasad";
    }

   /* public function __construct()
    {
        self::welcome();
    }*/

}

class anotherclass{
    public function message(){
        greets::welcome();
    }

}
//new greets();
$a=new anotherclass();
$a->message();
