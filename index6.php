<html>

<?php

class Person {
    
    //creating new public classes (they contain information)

public $isAlive = true;
    public $firstname;
    public $lastname;
    public $age;

//Constructing the variables and activating what they do by this tag. 
    public function __construct($firstname, $lastname, $age) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
       
    }
    
    //creating a new public function that i want to return the text and then whatever the user fills in the gaps.
    public function greet() {
    return "Hello, my name is". " ". $this->firstname. " ". $this->lastname. " ". "Nice to meet you! :-)"; 
    
    
    }
        
        
}
//Below I am creating new objects (teacher and student) which are activated by keyword 'new'. 
$teacher = new Person("boring", "12345", 12345);
$student = new Person("Billy", "Farroll", 21);

echo $teacher->greet();
echo $student->greet();
echo $student->age;

 


?>

</html>
