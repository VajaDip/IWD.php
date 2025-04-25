<?php  
class Animal {  
    public func on speak() {  
        echo "Animal speaks.<br>";  
    }  
}  
  
class Dog extends Animal {  
      
    public func on speak() {  
        echo "Dog barks.<br>";  
    }  
}  
  
$obj = new Dog();  
$obj->speak();   
?>
