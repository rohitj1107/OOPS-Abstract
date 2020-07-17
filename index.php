<?php
// abstract class
abstract class base {
    public $name;
    // abstract method
    abstract function cal($a , $b);
}
// drive class
class drive extends base{
    // public method
    public function cal($a , $b){
        return $a + $b;
    }
}
// create object
$obj = new drive;
// call object
echo $obj->cal(10,15);

?>
