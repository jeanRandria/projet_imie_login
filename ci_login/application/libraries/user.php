<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class User{

	public $id=0;
	public $name;
	public $password;



    public function __construct($id, $name, $password) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
    }

    public function __toString() 
    {
        return $this->username;
    }
}