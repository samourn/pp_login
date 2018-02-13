<?php

    class Admin extends User
    {
        private $_username;
        private $_password;
        private $_accessLevel;

        /**
         * Admin constructor.
         * @param $username username
         * @param $password password
         * @param $accessLevel access level must be 1 to edit other users
         */
        public function __construct($username, $password, $accessLevel)
        {
            $this->_username = $username;
            $this->_password = $password;
            $this->_accessLevel = 1;
        }

        /**
         * set the access level
         * @param $accessLevel set access level
         */
        function setAccessLevel($accessLevel)
        {
            $this->_accessLevel = $accessLevel;
        }

        /**
         * return the access level
         * @return accessLevel
         */
        function getAccessLevel()
        {
            return $this->_accessLevel;
        }

        /**
         * edit another user is admin has high enough access level
         * @param User $user
         * @param newUser new username to be set
         */
        function editUser(User $user, $newUser)
        {
            if ($this->_accessLevel >= 1) {
                echo "<p>Editing " . $user->getUsername() . "</p>";
                $user->setUsername($newUser);
            }
        }

    }//end Admin class
