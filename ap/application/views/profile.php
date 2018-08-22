<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<title>Assemble Point</title>
<style type="text/css">    
    .create-button{
        background-color: #038930;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        border: none;
        padding: 5px;
        padding-left: 25px;
        padding-right: 25px;
    }
    .create-button:hover{
        cursor: pointer;
        background-color: #21ad50;
    }
    #project-container-parent{
        padding-left: 60px;
        padding-right: 60px;
    }
    #project-container{
        float: none;
        margin: auto;
    }
    .create-container{
        padding-top: 30px;
    }
    .create-container > p{
        font-size: 15px;
        font-weight: bold;
        padding: 5px;
    }
    .create-container table td:nth-child(1){
        width: 150px;
        font-size: 15px;
        font-weight: bold;
    }
    .create-container table td:nth-child(2){
        width: 350px;
    }
    .create-container table td input{
        width: 100%;
    }
    .create-container table td textarea{
        height: 100px;
        width: 100%;
    }
    .create-container table td{
        width: 100%;
        padding: 10px;
    }
</style>
<title>Assemble Point</title>
<div id="page-layout">
    <div id="page-layout-heading">
        <p>Profile</p>
    </div>
    <div id="project-container-parent">
        <div id="project-container">
            <p><a href="<?php echo base_url('projects/'); ?>"><- Go back</a></p>
            <div class="create-container">
                <div>
                    <span style="color: red;">
                        <?php
                        if (isset($_SESSION['error_msg'])) {
                            echo $_SESSION['error_msg'];
                            unset($_SESSION['error_msg']);
                        }
                        ?>
                    </span>
                    <p style="font-size: 14px;font-weight: bold;color: gray;">Basic Info</p>
                    <hr>
                    <form action="<?php echo base_url('profile/update'); ?>" method="post">
                        <table>
                            <tr>
                                <td>Email</td>
                                <td> 
                                    <input type="email" name="user_email" disabled required placeholder="Email" value="<?php echo $_SESSION['user_email']; ?>">
                                </td>                                
                            </tr>                            
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" name="user_full_name" required placeholder="Full Name" value="<?php echo $_SESSION['user_full_name']; ?>">
                                </td>                                
                            </tr>                            
                            <tr>
                                <td>Organization</td>
                                <td>
                                    <input type="text" name="user_organization" required placeholder="Organization" value="<?php echo $_SESSION['user_organization']; ?>">
                                </td>                                
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="create-button">Update</button>
                                </td>
                            </tr>
                            <tr style="display: none">
                                <td></td>
                                <td>
                                    <?php
                                    $hash = uniqid();
                                    ?>
                                    <input type="password" name="user_password" value="<?php echo $hash; ?>">
                                    <input type="password" name="user_confirm_password" value="<?php echo $hash; ?>">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div id="profile-pic-update" style="margin-top: 25px">
                    <p style="font-size: 14px;font-weight: bold;color: gray;">Profile picture</p>
                    <hr>
                    <img src="<?php echo $_COOKIE['profile_pic'];?>" style="width: 150px;border-radius: 50%">
                    <form action="<?php echo base_url('profile/profile_pic_update'); ?>" method="post" enctype="multipart/form-data">
                        <input type="file" name="profile_pic" required style="margin: 20px 0 20px 0;">
                        <button type="submit" class="create-button">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>