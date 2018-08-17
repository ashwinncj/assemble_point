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
</style>
<div  id="request-button" style="">
    <p>Request</p>
</div>
</body>
</html>
