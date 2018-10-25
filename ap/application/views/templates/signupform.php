<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div id="home-auth">
    <p>Create your account and get started with your projects.<br>
        <span style="font-size: 12px">Note: All the fields are mandatory.</span>
        <br><span style="font-size: 10px">Have an account? <a href="<?php echo base_url('/home/login'); ?>">Login here</a></span></p>
    <span style="color: red;"><?php
        if (isset($_SESSION['error_msg'])) {
            echo $_SESSION['error_msg'];
            unset($_SESSION['error_msg']);
        }
        ?>
    </span>
    <form action="<?php echo base_url('home/register'); ?>" method="post">
        <input type="email" name="user_email" required placeholder="Email">
        <input type="password" name="user_password" required placeholder="Password">
        <input type="password" name="user_confirm_password" required placeholder="Confirm Password">
        <input type="text" name="user_full_name" required placeholder="Full Name">
        <input type="text" name="user_organization" required placeholder="Organization">
        <button type="submit">Signup</button>
    </form>
    <p>Note: By clicking Signup below, you agree to all the <a href="<?php echo base_url('/termsandconditions'); ?>">Terms and Conditions</a> of RADEL Corp’s Assemble Point program.
        <br>Have an account? <a href="<?php echo base_url('/home/login'); ?>">Login here</a><br>
    </p>
</div>