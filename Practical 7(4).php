<?php  
  
class Animal {  
    public $name;  
      
    public func on __construct($name) {  
        $this->name = $name;  
    }  
  
    public func on speak() {  
        echo "$this->name makes a sound.<br>";  
    }  
}  
  
class Dog extends Animal {  
    public func on bark() {  
        echo "$this->name barks!<br>";  
    }  
}  
  
$obj = new Dog("Buddy");  
$obj->speak();   
$obj->bark();    
?>
