<?php
class domain{

    public static  function abc()
    {
      return "hi prasad";

    }

}
class child extends domain
{
    public $websiteName;
public function __construct()
{
    $this->websiteName =  parent::abc();
}

}
$a=new child();
echo $a->websiteName;

