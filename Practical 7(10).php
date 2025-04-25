
<?php  
abstract class Animal {  
      
    public abstract func on makeSound();  
  
    public func on breathe() {  
        echo "Animal is breathing.<br>";  
    }  
}  
  
class Dog extends Animal {  
    public func on makeSound() {  
        echo "Woof!<br>";  
    }  
}  
  
$obj = new Dog();  
$obj->makeSound();  
$obj->breathe();  
?> 
