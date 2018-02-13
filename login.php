<?php
    ini_set('display-errors', 1);
    error_reporting(E_ALL);

    require('user.php');
    require('admin.php');
    $sam = new User("sam", "1234");
    $antonio = new Admin("antonio", "5678");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Test</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Login Page</h1>
        <?php
            $sam->setUsername("sam");
            $sam->setPassword("1234");
            echo "name:" .$sam->getusername();
            $sam->login($sam->getUsername(), "1234");
            $antonio->setUsername("antonio");
            $antonio->setPassword("password");
            echo $antonio->getUsername() . " has access level " . $antonio->getAccessLevel();
            $antonio->editUser($sam, "sam2");
            echo $sam->getUsername() . " is the new username";
        ?>
    </body>
</html>
