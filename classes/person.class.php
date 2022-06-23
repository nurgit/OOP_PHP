<?php


class info{
    public  $name="Nur";
    protected $age;
    private $gender;

    
}



class Person {

    public function __construct($name, $age,$gender){
    $this->name=$name;
    $this->age=$age;
    $this->gender=$gender;
    }
    

    public function myname($name){
        $this->name = $name;
    }

}

$a= new info();
//var_dump($a);

class MyInfo{
    public function names(){

       $name="nur";
      return $name;
    }

}


?>