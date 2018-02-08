<?php

class User
{
    //Declare the class attributes
    private $username;
    private $password;
    private $loggedIn;

    //Parameterized constructor
    public function __construct()
    {
        $this->username = "";
        $this->loggedIn = false;
    }

    //getters and setters
    function getUsername()
    {
        return $this->username;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        if(strlen($password) >= 6) {
            $this->password = $password;
            return true;
        }
        return false;
    }

}//end User class

?>