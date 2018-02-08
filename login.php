<?php
    require('user.php');
    $sam = new User("sam", "1234");
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
        ?>
    </body>
</html>
