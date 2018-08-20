<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<title>Assemble Point</title>
<style type="text/css">    
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
</style>
<title>Assemble Point</title>
<div id="page-layout">
    <div id="page-layout-heading">
        <p>Create New</p>
    </div>
    <div id="project-container-parent">
        <div id="project-container">
            <div class="create-container">
                <p><a href="<?php echo base_url('projects/newproject');?>">Create new project</a></p>
                <p><a href="<?php echo base_url('projects/newuser');?>">Add new user</a></p>
                <p><a href="<?php echo base_url('projects/assignuser');?>">Assign user to project</a></p>
            </div>
        </div>
    </div>
</div>