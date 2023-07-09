<?php
class Str{
    public readonly string $value;
        // public static string $value;

    public function __construct($str){
        $this->value=$str;
        //  self::$value=$str;

    }
    public function length():int
    { 
        return strlen($this->value);
    }
    public function equal($str){
     return $this->value===$str;
    }
    public  function getValue(){
        return $this->value;
    }
}
$str=new Str('dalia');
echo "<pre>";
var_dump($str->length(),$str->equal('dalia'),$str->getValue());
///////// objact  from class  and i implement interface the object will by obj from inter fasc