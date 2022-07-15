<?php 


class User {
  public $name;
  public $email;
  public $password;

  public function __construct($name,$email,$password){
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }

}

// $user1 = new User();
// $user2 = new User();
// $user1->name = "kavooce";
// $user1->email = "user@example.com";
// $user1->password = "123";
// $user1->set_name("jack");
// $user2->set_name("jane");

// echo $user1->name;
// echo $user2->name;

// var_dump($user1);
// var_dump($user2);


$user3 = new User("kavooce", "user@example.com","123");
// var_dump($user3);

class Employee extends User {
  public function __construct($name, $email, $password, $title){
    parent::__construct($name,$email,$password);
    $this->title = $title;
  }

  public function get_title(){
    return $this->title;
  }
}

$employee1 = new Employee($user3->name,$user3->email,$user3->password,"manager");
// var_dump($employee1);
echo $employee1->get_title();