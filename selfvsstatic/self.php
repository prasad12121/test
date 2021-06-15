<?php
/*
class foo
{
protected  static $bar="12345";
}

class bar extends foo
{
    public static  $bar="4321";
}


echo bar::$bar;*/

/*class Foo
{
    public static $bar = 1234;

    public static function a()
    {
        echo 'static' . static::$bar;
        echo 'self' . self::$bar;
    }
}

class Bar extends Foo
{
    public static $bar = 4321;
}

(new Bar())->a();*/

class A { // Base Class
    protected static $name = 'ClassA';
    public static function getSelfName() {
        return self::$name;
    }
    public static function getStaticName() {
        return static::$name;
    }
}

class B extends A {
    protected static $name = 'ClassB';
}

echo B::getSelfName(); // ClassA
echo B::getStaticName(); // ClassB
