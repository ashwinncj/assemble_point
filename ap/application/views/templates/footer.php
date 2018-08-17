<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    #request-button p{
        transform: rotate(90deg);
        top: 32px;
        position: relative;
        color: white;
        font-size: 14px;
        font-weight: bold;    
    }
    #request-button{
        position: fixed;
        top: 20%;
        left: 0%;
        background-color: #038930;
        width: 40px;
        height: 100px;        
    }
    #request-button:hover{
        cursor: pointer;
        background-color: #21ad50;
    }
    #social-icons-container{
        position: fixed;
        bottom: 0px;
        right: 10px;
    }
    #social-icons-container ul li:hover{
        cursor: pointer;
        opacity: 1;
    }
    #social-icons-container ul li{
        list-style-type: none;
        opacity: 0.5;
        padding: 2px;
    }
    #social-icons-container ul li img{
        width: 30px;
    }
</style>
<div  id="request-button" style="">
    <p>Request</p>
</div>
<div id="social-icons-container">
    <ul>
        <li><img src="<?php echo base_url('assets/img/socialicons/Facebook.png'); ?>"</li>
        <li><img src="<?php echo base_url('assets/img/socialicons/Twitter.png'); ?>"</li>
        <li><img src="<?php echo base_url('assets/img/socialicons/Instagram.png'); ?>"</li>
        <li><img src="<?php echo base_url('assets/img/socialicons/LinkedIN.png'); ?>"</li>
        <li><img src="<?php echo base_url('assets/img/socialicons/Google.png'); ?>"</li>
        <li><img src="<?php echo base_url('assets/img/socialicons/HTML5.png'); ?>"</li>
        <li><img src="<?php echo base_url('assets/img/socialicons/Ubuntu.png'); ?>"</li>
    </ul>
</div>
</body>
</html>
