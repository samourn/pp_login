<?php

include('user.php');

    class Admin extends User
    {
        private $username;
        private $password;
        private $accessLevel;
        //constructor
        public function __construct($username, $password, $accessLevel)
        {
            $this->username = $username;
            $this->password = $password;
            $this->accessLevel = 1;
        }

        function setAccessLevel($accessLevel)
        {
            $this->accessLevel = $accessLevel;
        }

        function getAccessLevel()
        {
            return $this->accessLevel;
        }

    }//end Admin class
