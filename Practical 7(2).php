<?php 
class Demo{ 
    public $message = "Hello, world!"; 
 
    public func on greet() { 
        echo $this->message . "<br>"; 
    } 
} 
 
$obj = new Demo(); 
echo $obj->message . "<br>";  
?>
