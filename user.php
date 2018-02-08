<?php

    /**
     * holds usernames and passwords, logs user in and out
     * @author Antonio Suarez <asuarez2@mail.greenriver.edu>
     * @author Sam Ourn <sourn@mail.greenriver.edu>
     * @copyright 2018
     */
    class User
    {
        //Declare the class attributes
        private $_username;
        private $_password;
        private $_loggedIn;

        /**
         * User constructor, starts out empty
         * @return void
         */
        public function __construct()
        {
            $this->_username = "";
            $this->_loggedIn = false;
        }

        /**
         * returns the username
         * @return string username
         */
        function getUsername()
        {
            return $this->_username;
        }

        /**
         * sets the username
         * @param $username username for the User object
         */
        function setUsername($username)
        {
            $this->_username = $username;
        }

        /**
         * set password if it is at least 6 characters
         * @param $password password to set
         * @return bool true if pasword is at least 6 characters
         */
        function setPassword($password)
        {
            if(strlen($password) >= 6) {
                $this->_password = $password;
                return true;
            }
            return false;
        }

        /**
         * check if username is in the array, then checks if password matches the usename
         * echos if the login is successful or not
         * @param $username usename
         * @param $password password
         */
        function login($username, $password)
        {
            include('users.php');

            // if in the array and the key and value match
            if (isset($users[$username]) && $users[$username] == $password) {
                $loggedIn = true;
                echo "<p>$username is logged in.</p>";
            }
            else {
                $loggedIn = false;
                echo '<p>Login error</p>';
            }
        }

        /**
         * clears username and passwords and sets loggedIn to false
         */
        function logout()
        {
            $username = "";
            $password = "";
            $loggedIn = false;
        }

    }//end User class