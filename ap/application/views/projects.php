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
    .project-name{
        font-size: 18px;
        font-weight: bold;
    }
    .project-tile-container{
        padding: 10px;
    }
    .project-tile{
        height: 230px;       
        overflow: hidden;
        position: relative;
        padding: 5px;
        padding-left: 15px;
        padding-right: 10px;
        transition: all 0.3s;
        opacity: 0.9;
    }
    .project-tile:hover{
        cursor: pointer;
        box-shadow: 0px 5px 10px 0px #666;
        opacity: 1;
    }
    .project-created-date{
        text-align: right;
        font-size: 13px;
        position: absolute;
        bottom: 0px;
        right: 0px;
        background-color: inherit;
        width: 100%;
        padding: 10px;
    }
    .project-tile-container:nth-child(1n) .project-tile{
        background-color: rgb(225,225,225);
        color: black; 
    }
    .project-tile-container:nth-child(2n) .project-tile{
        background-color: #f5f5f5;
        color: black; 
    }
    .project-tile-container:nth-child(3) .project-tile{
        background-color: #66add2;
        color: white; 
    }
    .project-tile-container:nth-child(5n) .project-tile{
        background-color: #6e91ac;
        color: white; 
    }
    .project-tile-container:nth-child(4n) .project-tile{
        background-color: #cbcbcb;
        color: black; 
    }
</style>
<title>Assemble Point</title>
<div id="page-layout">
    <div id="page-layout-heading">
        <p>Dashboard</p>
    </div>
    <div id="project-container-parent">
        <a href="<?php echo base_url('/projects/create'); ?>"><button id="create-button">Create</button></a>
        <div id="project-container">
            <div class="col-lg-4 col-md-6 project-tile-container">
                <div class="project-tile">
                    <h4 class="project-name">Project Name</h4>
                    <p>The overall information about the project is given in this description.
                        The information here may be longer than the available space.
                        To test out the overflow of the div, the description here is longer.
                        The information here.</p>
                    <div class="project-created-date">Created on 14 Aug 2018</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-tile-container">
                <div class="project-tile">
                    <h4 class="project-name">Project Name</h4>
                    <p>The overall information about the project is given in this description.
                        The information here may be longer than the available space.
                        To test out the overflow of the div, the description here is longer.
                        The information here.</p>
                    <div class="project-created-date">Created on 14 Aug 2018</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-tile-container">
                <div class="project-tile">
                    <h4 class="project-name">Project Name</h4>
                    <p>The overall information about the project is given in this description.
                        The information here may be longer than the available space.
                        To test out the overflow of the div, the description here is longer.
                        The information here.</p>
                    <div class="project-created-date">Created on 14 Aug 2018</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-tile-container">
                <div class="project-tile">
                    <h4 class="project-name">Project Name</h4>
                    <p>The overall information about the project is given in this description.
                        The information here may be longer than the available space.
                        To test out the overflow of the div, the description here is longer.
                        The information here.</p>
                    <div class="project-created-date">Created on 14 Aug 2018</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-tile-container">
                <div class="project-tile">
                    <h4 class="project-name">Project Name</h4>
                    <p>The overall information about the project is given in this description.
                        The information here may be longer than the available space.
                        To test out the overflow of the div, the description here is longer.
                        The information here.</p>
                    <div class="project-created-date">Created on 14 Aug 2018</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-tile-container">
                <div class="project-tile">
                    <h4 class="project-name">Project Name</h4>
                    <p>The overall information about the project is given in this description.
                        The information here may be longer than the available space.
                        To test out the overflow of the div, the description here is longer.
                        The information here.</p>
                    <div class="project-created-date">Created on 14 Aug 2018</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-tile-container">
                <div class="project-tile">
                    <h4 class="project-name">Project Name</h4>
                    <p>The overall information about the project is given in this description.
                        The information here may be longer than the available space.
                        To test out the overflow of the div, the description here is longer.
                        The information here.</p>
                    <div class="project-created-date">Created on 14 Aug 2018</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-tile-container">
                <div class="project-tile">
                    <h4 class="project-name">Project Name</h4>
                    <p>The overall information about the project is given in this description.
                        The information here may be longer than the available space.
                        To test out the overflow of the div, the description here is longer.
                        The information here.</p>
                    <div class="project-created-date">Created on 14 Aug 2018</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-tile-container">
                <div class="project-tile">
                    <h4 class="project-name">Project Name</h4>
                    <p>The overall information about the project is given in this description.
                        The information here may be longer than the available space.
                        To test out the overflow of the div, the description here is longer.
                        The information here.</p>
                    <div class="project-created-date">Created on 14 Aug 2018</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-tile-container">
                <div class="project-tile">
                    <h4 class="project-name">Project Name</h4>
                    <p>The overall information about the project is given in this description.
                        The information here may be longer than the available space.
                        To test out the overflow of the div, the description here is longer.
                        The information here.</p>
                    <div class="project-created-date">Created on 14 Aug 2018</div>
                </div>
            </div>
        </div>
    </div>
</div>