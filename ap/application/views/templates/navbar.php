<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    #top-navigation li{
        display: inline;
        padding: 5px;
        color: #666;
        font-size: 14px;
    }
     #top-navigation li:hover{
         color: #0089ff;
         cursor: pointer;
     }
</style>
<nav>
    <div style="padding-left: 70px;padding-top: 10px;">
        <div class="col-md-4" style="width: 300px">
            <img src="<?php echo base_url('assets/img/logo-combined.png'); ?>" style="width: 300px">
        </div>
        <div class="col-md-8" style="padding: 12px">
            <span>
                <ul id="top-navigation">
                    <li>Home</li>
                    <li>About</li>
                    <li>Contact</li>
                    <li>Help</li>
                    <li>Terms and Conditions</li>
                </ul>
            </span>
        </div>
    </div>
</nav>