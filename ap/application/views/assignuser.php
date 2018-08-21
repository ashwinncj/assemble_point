<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<title>Assemble Point</title>
<style type="text/css">    
    #create-button{
        background-color: #038930;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        border: none;
        padding: 5px;
        padding-left: 25px;
        padding-right: 25px;
    }
    #create-button:hover{
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
    .create-container table td input,.create-container table td select{
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
        <p>Assign Privilages</p>
    </div>
    <div id="project-container-parent">
        <div id="project-container">
            <div class="create-container">
                <p><a href="<?php echo base_url('projects/create'); ?>"><- Go back</a></p>
                <div>
                    <span style="color: red;">
                        <?php
                        if (isset($_SESSION['error_msg'])) {
                            echo $_SESSION['error_msg'];
                            unset($_SESSION['error_msg']);
                        }
                        ?>
                    </span>
                    <form action="<?php echo base_url('projects/assignprivilages'); ?>" method="post">
                        <table>
                            <tr>
                                <td>User/Email</td>
                                <td>
                                    <select name="uid" required>
                                        <option selected disabled value="">Select user</option>
                                        <?php foreach ($users as $value) { ?>
                                            <option value="<?php echo $value['uid']; ?>">
                                                <?php echo $value['user_name']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>                                </td> 
                            </tr>                            
                            <tr>
                                <td>Project</td>
<!--                                <td><input type="text" name="project_uid" required placeholder="Proect"></td>                                -->
                                <td>
                                    <select name="pid" required>
                                        <option selected disabled value="">Select project</option>
                                        <?php foreach ($projects as $value) { ?>
                                            <option value="<?php echo $value['pid']; ?>">
                                                <?php echo $value['project_name']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </td>                                
                            </tr>                            
                            <tr>
                                <td>Role</td>
                                <td>
                                    <input type="radio" name="user_role" required value="FALSE" checked style="width: max-content;"><span> None</span><br>
                                    <input type="radio" name="user_role" required value="view" checked style="width: max-content;"><span> View only</span><br>
                                    <input type="radio" name="user_role" required value="comment" style="width: max-content;"><span> Comment</span>
                                </td>                                
                            </tr>
                            <tr>
                                <td></td>
                                <td><button id="create-button">Update</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>