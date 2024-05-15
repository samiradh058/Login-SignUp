<?php 

declare(strict_types=1);

function signup_inputs() {
        if(isset($_SESSION['signup_data']['username']) && !isset($_SESSION['error_signup']['username_taken'])) {
            echo '<input type="text" name="username" placeholder="Username" value="' . $_SESSION['signup_data']['username'] .'">';
        } else{
            echo '<input type="text" name="username" placeholder="Username">';
        }

        echo '<input type="password" name="pwd" placeholder="Password">';

        if(isset($_SESSION['signup_data']['email']) && !isset($_SESSION['error_signup']['email_used']) && !isset($_SESSION['error_signup']['invalid_email'])) {
            echo '<input type="text" name="email" placeholder="Email" value="' . $_SESSION['signup_data']['email'] .'">';
        } else{
            echo '<input type="text" name="email" placeholder="Email">';   
        }
}

function check_signup_errors() {
    if(isset($_SESSION['error_signup'])) {
        $errors= $_SESSION['error_signup'];

        echo '<br>';

        foreach($errors as $error) {
            echo '<p>'. $error .'</p>';
        }

        unset($_SESSION['error_signup']);
    } else if(isset($_GET['signup']) && $_GET['signup'] === 'success') {
        echo '<br>';
        echo '<p>SignUp Success</p>';
        unset($_SESSION['signup_data']);

    }
}