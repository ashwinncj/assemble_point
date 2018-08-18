<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div id="home-auth">
    <p>Login. Continue.<br>As simple as that.</p>
    <span style="color: red;"><?php
        if (isset($_SESSION['error_msg'])) {
            echo $_SESSION['error_msg'];
            unset($_SESSION['error_msg']);
        }
        ?>
    </span>
    <form action="<?php echo base_url('/home/authenticate'); ?>" method="post">
        <input type="text" name="user_email" required placeholder="Email">
        <input type="password" name="user_password" required placeholder="Password">
        <button type="submit">Login</button>
    </form>
    <p>Forgot password? <a>Click here</a><br>
        Need a new account? <a href="<?php echo base_url('/home/signup'); ?>">Signup here</a></p>
</div>