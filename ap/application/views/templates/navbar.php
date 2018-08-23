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
    #nav-logo:hover{
        cursor: pointer;
    }
</style>
<nav>
    <div style="padding-left: 70px;padding-top: 10px;">
        <div class="col-md-4" style="width: 300px">
            <a id="nav-logo" href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('assets/img/logo-combined.png'); ?>" style="width: 300px"></a>
        </div>
        <div class="col-md-8" style="padding: 12px">
            <span>
                <ul id="top-navigation">
                    <li><a href="<?php echo base_url('/projects'); ?>">Projects</a></li>
                    <li><a href="<?php echo base_url('/profile'); ?>">Profile</a></li>
                    <li>People</li>
                    <li>Discussions</li>
                    <li>Help</li>
                    <li>Terms and Conditions</li>
                    <?php
                    $logout = isset($_SESSION['user_logged']) ? ($_SESSION['user_logged'] == TRUE ? TRUE : FALSE ) : FALSE;
                    if ($logout) {
                        ?>
                        <li><a href="<?php echo base_url('/logout'); ?>">Logout</a></li>
                        <?php
                    };
                    ?>
                </ul>
            </span>
        </div>
    </div>
</nav>
<span class="clearfix"></span>