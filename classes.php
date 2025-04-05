


<?php

class person {
    // public string $name;
    // public int $age;

    // public function __construct(String $name, int $age) {
    //     $this->name = $name;
    //     $this->age = $age;
    // }
     
    // OR CONSTRUCT PROMOTION ON IT AND THERE'S NO NEED DECLEARE IT FIRST
    public function __construct(public string $name, public int $age) {
    }

    public function introduce(): string {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }

}


$person = new Person("Jose",29);
echo $person ->introduce();


// inheritance is based ond the person class but can add someting on it's all

class Employee extends Person{

    public function __construct(public string $name, public int $age, public string $position) {}

    public function introduce():string{
        return "I work as a {$this->position}.";
    }
}

$employee = new Employee("Jaime",18,"junior developer");
echo $employee->introduce() . "\n";


