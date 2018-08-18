<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div id="home-auth">
    <p>Login. Continue.<br>As simple as that.</p>
    <form>
        <input type="text" name="username" required placeholder="Email">
        <input type="password" name="password" required placeholder="Password">
        <button type="submit">Login</button>
    </form>
    <p>Forgot password? <a>Click here</a><br>
        Need a new account? <a href="<?php echo base_url('/home/signup'); ?>">Signup here</a></p>
</div>