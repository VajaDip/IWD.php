<?php  
  
class Animal {  
    public func on breathe() {  
        echo "Animal breathes.<br>";  
    }  
}  
  
class Mammal extends Animal {  
    public func on walk() {  
        echo "Mammal walks.<br>";  
    }  
}  
  
class Dog extends Mammal {  
    public func on bark() {  
        echo "Dog barks.<br>";  
    }  
}  
  
$obj = new Dog();  
$obj->breathe();   
$obj->walk();      
$obj->bark();      
?> 
