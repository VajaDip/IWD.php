<?php  
class Demo {  
    private $name;  
  
    public func on setName($name) {  
        $this->name = $name;  
    }  
  
    public func on getName() {  
        return $this->name;  
    }  
}  
  
$obj = new Demo();  
$obj->setName("Alice");  
echo "Name: " . $obj->getName() . "<br>";  
?>
