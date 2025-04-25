<?php  
interface Shape {  
    public func on area();  
}  
  
class Circle implements Shape {  
    public $radius;  
  
    public func on __construct($radius) {  
        $this->radius = $radius;  
    }  
  
    public func on area() {  
        return pi() * $this->radius * $this->radius;  
    }  
}  
  
$obj = new Circle(5);  
echo "Area of circle: " . $obj->area() . "<br>";  
?> 
 
