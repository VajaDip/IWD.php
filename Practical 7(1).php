<?php  
class MyClass {  
    public $name;  
  
    public func on __construct($name) {  
        $this->name = $name;  
        echo "Constructor called: Hello, $this->name!<br>";  
    }  
  
    public func on __destruct() {  
        echo "Destructor called: Goodbye, $this->name!<br>";  
    }  
}  
  
$obj = new MyClass("John");  
?> 
