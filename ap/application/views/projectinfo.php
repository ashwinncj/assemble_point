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
        <p>Edit project</p>
    </div>
    <div id="project-container-parent">
        <div id="project-container">
            <div class="create-container">
                <p><a href="<?php echo base_url('projects/editproject'); ?>"><- Go back</a></p>
                <div>
                    <span style="color: red;">
                        <?php
                        if (isset($_SESSION['error_msg'])) {
                            echo $_SESSION['error_msg'];
                            unset($_SESSION['error_msg']);
                        }
                        ?>
                    </span>
                    <form action="<?php echo base_url('projects/updateproject'); ?>" method="post">
                        <input type="text" name="pid" value="<?php echo $pid; ?>" required style="display: none">
                        <table>
                            <tr>
                                <td>Project  Name</td>
                                <td><input type="text" name="project_name" value="<?php echo $info['project_name']; ?>" required placeholder="Project Name"></td>                                
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><textarea name="project_description" value="" placeholder="Description"><?php echo $info['project_description']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="<?php echo base_url('/projects/create'); ?>"><button id="create-button">Update</button></a></td>
                            </tr>
                        </table>
                    </form>
                    <form action="<?php echo base_url('projects/deleteproject'); ?>" method="post">
                        <input type="text" name="pid" value="<?php echo $pid; ?>" required style="display: none">
                        <button style="float: right;border: none;color: white;background-color: red;padding: 5px" type="submit">Delete Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>