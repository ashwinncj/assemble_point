<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div id="home-auth">
    <p>Create your account and get started with your projects.<br>
        <span style="font-size: 12px">Note: All the fields are mandatory.</span>
    <br><span style="font-size: 10px">Have an account? <a href="<?php echo base_url('/home/login'); ?>">Login here</a></span></p>
    <form>
        <input type="email" name="email" required placeholder="Email">
        <input type="password" name="password" required placeholder="Password">
        <input type="password" name="confirm_password" required placeholder="Confirm Password">
        <input type="text" name="user_full_name" required placeholder="Full Name">
        <input type="text" name="user_organization" required placeholder="Organization">
        <button type="submit">Signup</button>
    </form>
    <p>Note: By clicking Signup below, you agree to all the <a href="<?php echo base_url('/termsandconditions'); ?>">Terms and Conditions</a> of RADEL Corp’s Assemble Point program.</p>
</div>