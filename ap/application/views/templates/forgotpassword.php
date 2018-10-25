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
    <form action="<?php echo base_url('/home/forgotpassword'); ?>" method="post">
        <input type="email" name="user_email" required placeholder="Email">
        <button type="submit">Reset password</button>
    </form>
    <p>Have an account? <a href="<?php echo base_url('/home/login'); ?>">Login here</a><br>
        Need a new account? <a href="<?php echo base_url('/home/signup'); ?>">Signup here</a></p>
</div>