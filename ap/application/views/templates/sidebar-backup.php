<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
    #sidebar-pane{
        transition: all 0.5s;
        display: block;
        width: 15%;
        padding: 0px;
    }
    .members{
        display: block;
        transition: all 0.5s;
    }
</style>

<div id="sidebar-pane" class="col-md-2" style="background-color:rgba(22, 81, 126,0.36);height:100vh">
</div>
<button id="close-pane" style="position: absolute;top: 0;left: 0px;display: block;z-index: 2">Close pane</button>
<button id="open-pane" style="position: absolute;top: 0;left: 0px;display: none;z-index: 2">Open pane</button>

<script>
    $('#close-pane').click(function () {
        $('#sidebar-pane').css('width', '0px');
        $('#working-pane').css('width', '100%');
        $('#sidebar-pane .members').css('display', 'none');
        $('#close-pane').css('display', 'none');
        $('#open-pane').css('display', 'block');
    });

    $('#open-pane').click(function () {
        $('#sidebar-pane').css('width', '15%');
        $('#working-pane').css('width', '85%');
        $('#sidebar-pane .members').css('display', 'block');
        $('#close-pane').css('display', 'block');
        $('#open-pane').css('display', 'none');
    });
</script>