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

    function login($username, $password)
    {
        include('users.php');

        if (isset($users[$username]) && $users[$username] == $password) {
            $loggedIn = true;
            echo "<p>$username is logged in.</p>";
        }
        else {
            $loggedIn = false;
            echo '<p>Login error</p>';
        }
    }

    function logout()
    {
        $username = "";
        $password = "";
        $loggedIn = false;
    }

}//end User class

?>