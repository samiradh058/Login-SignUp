<?php 
require_once './includes/config_session.inc.php';
require_once './includes/signup_view.inc.php';
require_once './includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
           display:flex;
           flex-direction:column;
           align-items:center;
           height:100vh;
           margin:0;
        }

        form{
            display:flex;
            flex-direction:column;
            align-items:center;
            border: 1px solid black;
            padding:20px;
            border-radius:5px;
        }

        form input{
            margin:5px;
            padding:10px;
            width:200px;
        }

        form button{
            margin-top:10px;
            background-color:black;
            color:white;
            font-size:24px;        }
    </style>

</head>
<body>

    <h3>
        <?php
        output_username();
        ?>
    </h3>

    <?php
    if (!isset($_SESSION['user_id'])) { ?>
        <h1>Login</h1>

        <form action="includes/login.inc.php" method='post'>
            <input type="text" name='username' placeholder='Username'>
            <input type="password" name='pwd' placeholder='Password'>
            <button>Login</button>
    </form> <?php } ?>

    <?php 
        check_login_errors();
    ?>

    <h1>Sign Up</h1>

    <form action="includes/signup.inc.php" method='post'>
        <?php
            signup_inputs();
        ?>
        <button>SignUp</button>
    </form>

    <?php 
    check_signup_errors();
    ?>

<h1>Logout</h1>

<form action="includes/loggedout.inc.php" method='post'>
    <button>Logout</button>
</form>

</body>
</html>