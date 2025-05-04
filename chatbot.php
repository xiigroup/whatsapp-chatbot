<?php
$state_controller = [
    "START" => "start_bot", //START is Required
	  "AUTH" => "authenticate",
	  "MAIN" => "main_menu",
];

class bot{
    public $sender;
    public $phone; //User phone number
    private $name; //User display name
    public $state; //Output state
    public $memory; //Output memory
    public $message; //Output message
	
    public function __construct($sender, $phone, $name, $state, $memory){
	$this->memory = $memory;
	$this->state = $state;
        $this->sender = $sender;
        $this->phone = $phone;
        $this->name = $name;
    }
    private function start_bot($message){ //$message is required,
        //here you might want to check wether or not the number is authenticated, for now lets say user is authenicated
        $authenticated = true;
        //if Authenticated allow to access main_menu function by setting state to MAIN
        if($authenticated){
          $his->message = "Hello there, welcome to main menu\n\n";
          $his->message = "1. \n\n";
          $this->state = "MAIN";
        }else{
          $his->message = "Hello there, You are not logged in\n\n";
          $his->message = "1. Log in \n\n";
          $this->state = "AUTH";
        }
    }
  private function authenticate(*$message*){
    if($message == 1){
      $his->message = "Logged in!";
    }else{
      $his->message = "Invalid response";
    }
  }
  private function main_menu(*$message*){
    if($message == 1){
      $his->message = "Logged in!";
    }elseif($message == 2){
      $his->message = "Logged in!";
    }else{
      $his->message = "Invalid response";
    }
  }
}
