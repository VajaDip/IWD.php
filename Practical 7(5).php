<?php 
interface Animal { 
    public func on speak(); 
} 
 
interface Pet { 
    public func on play(); 
} 
 
class Dog implements Animal, Pet { 
    public func on speak() { 
        echo "Woof!<br>"; 
    } 
 
    public func on play() { 
        echo "Dog is playing.<br>"; 
    } 
} 
 
$obj = new Dog(); 
$obj->speak(); 
$obj->play(); 
?>
