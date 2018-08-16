<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<title>Assemble Point</title>
<style type="text/css">
    #working-pane{
    }
    .project-tiles:hover{
        box-shadow: 0px 10px 10px 2px rgba(0, 0, 0, 0.76);
        cursor: pointer;
    }
    .project-tiles{
        transition: all 0.3s;
        width: 230px;
        height: 230px;
        background-color: rgba(0,0,0,0.35);
        color: white;
        padding: 0px;
        margin-left: 30px;
        margin-bottom: 30px;
        box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.76);
    }
    .project-name{
        margin: 0px;
        padding: 10px;
        font-size: 20px;
    }
    .project-description{
        padding: 10px;
        font-size: 12px;
    }
    .project-date{
        padding: 10px;
        position: absolute;
        bottom: 0;
        right: 0;
        font-size: 11px;
    }
</style>
<div>
    <div id="dashboard-content" class="col-md-12" style="padding:0;">
        <?php $this->load->view('templates/sidebar'); ?>
        <div id="working-pane" class="col-md-9" style="background-color:#243F54;padding-bottom: 50px;">
            <h3 style="color: white;font-size: 25px;padding-left: 30px;">DASHBOARD</h3>
            <div class="col-md-12">
                <div class="col-md-4 project-tiles" style="">
                    <h3 class="project-name">Project One</h3>
                    <p class="project-description">Sed odio lorem, porta quis tempor id, vestibulum id neque. Fusce eget nunc congue, ultrices urna quis, vulputate nisl. Aenean semper in massa quis sagittis.</p>
                    <p class="project-date">Created on 14 Aug 2018</p>
                </div>
                <div class="col-md-4 project-tiles" style="">
                    <h3 class="project-name">Project Two</h3>
                    <p class="project-description">Sed odio lorem, porta quis tempor id, vestibulum id neque. Fusce eget nunc congue, ultrices urna quis, vulputate nisl. Aenean semper in massa quis sagittis.</p>
                    <p class="project-date">Created on 14 Aug 2018</p>
                </div>
                <div class="col-md-4 project-tiles" style="">
                    <h3 class="project-name">Project Three</h3>
                    <p class="project-description">Sed odio lorem, porta quis tempor id, vestibulum id neque. Fusce eget nunc congue, ultrices urna quis, vulputate nisl. Aenean semper in massa quis sagittis.</p>
                    <p class="project-date">Created on 14 Aug 2018</p>
                </div>
                <div class="col-md-4 project-tiles" style="">
                    <h3 class="project-name">Project Four</h3>
                    <p class="project-description">Sed odio lorem, porta quis tempor id, vestibulum id neque. Fusce eget nunc congue, ultrices urna quis, vulputate nisl. Aenean semper in massa quis sagittis.</p>
                    <p class="project-date">Created on 14 Aug 2018</p>
                </div>
                <div class="col-md-4 project-tiles" style="">
                    <h3 class="project-name">Project Five</h3>
                    <p class="project-description">Sed odio lorem, porta quis tempor id, vestibulum id neque. Fusce eget nunc congue, ultrices urna quis, vulputate nisl. Aenean semper in massa quis sagittis.</p>
                    <p class="project-date">Created on 14 Aug 2018</p>
                </div>
                <div class="col-md-4 project-tiles" style="">
                    <h3 class="project-name">Project Six</h3>
                    <p class="project-description">Sed odio lorem, porta quis tempor id, vestibulum id neque. Fusce eget nunc congue, ultrices urna quis, vulputate nisl. Aenean semper in massa quis sagittis.</p>
                    <p class="project-date">Created on 14 Aug 2018</p>
                </div>
                <div class="col-md-4 project-tiles" style="">
                    <h3 class="project-name">Project Seven</h3>
                    <p class="project-description">Sed odio lorem, porta quis tempor id, vestibulum id neque. Fusce eget nunc congue, ultrices urna quis, vulputate nisl. Aenean semper in massa quis sagittis.</p>
                    <p class="project-date">Created on 14 Aug 2018</p>
                </div>
            </div>
        </div>
    </div>
</div>
