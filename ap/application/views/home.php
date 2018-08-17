<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    #home-intro-banner p:nth-child(1){
        font-size: 20px;
        font-weight: bold;
    }
    #home-intro-banner p:nth-child(2){
        font-size: 13px;
        font-weight: normal;
    }
    #home-intro-banner p:nth-child(3){
        font-size: 15px;
        font-weight: normal;
    }
    #home-intro-banner{
        background-color: #F5EFE6;
        padding: 25px;
    }
    #home-intro-banner-parent{
        padding: 40px;
    }
    #home-intro-banner button,#home-auth form button{
        background-color: #038930;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        border: none;
        padding: 5px;
        padding-left: 15px;
        padding-right: 15px;
    }
    #home-auth p:nth-child(1){
        font-size: 20px;
        font-weight: bold;
    }
    #home-auth{
        background-color: #F5EFE6;
        padding: 25px;
    }
    #home-auth-parent{
        padding-left: 40px;
    }
    #home-auth form input[type='text'],#home-auth form input[type='password']{
        width: 100%;
        border: none;
        margin-bottom: 10px;
        padding: 5px;
    }
    #home-auth form +p{
        font-size: 13px;
        margin-top: 5px;
    }
    #home-auth a{
        cursor: pointer;
    }
</style>
<title>Assemble Point</title>
<div id="page-layout">
    <div id="home-intro-banner-parent" class="col-md-12">
        <div id="home-intro-banner" class="col-md-8">
            <p>Use the simple and user-friendly project overview tool and get your efficiency to the fullest.</p>
            <p>Developed especially for companies and clients to bridge the gap of project oversight.</p>
            <p>Try the tool and get to know the benefits and increase your productivity. Its free to try and we'll make your you get the complete satisfaction.</p>
            <button>Learn More</button>
        </div>
        <div id="home-auth-parent" class="col-md-4">
            <div id="home-auth">
                <p>Login. Continue.<br>As simple as that.</p>
                <form>
                    <input type="text" name="username" required placeholder="Email">
                    <input type="password" name="password" required placeholder="Password">
                    <button type="submit">Login</button>
                </form>
                <p>Forgot password? <a>Click here</a><br>
                Need a new account? <a>Signup here</a></p>
            </div>
        </div>
    </div>
</div>
