<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<title>Assemble Point</title>
<style type="text/css">    
    #discussion-container-parent{
        padding-left: 50px;
        padding-right: 50px;
    }
    #project-name{
        font-size: 19px;
        font-weight: bold;
    }
    hr{
        width: 100%;
        background-color: gray;
        height: 0px;
        margin: 6px;
    }
    #discussion-status{
        font-size: 13px;
        padding-left: 10px;
    }
    #discussion-status span{
        margin-right: 20px;
    }
    #discussion-status a{
        cursor: pointer;
    }
    .discussion-left{
        text-align: left;
        width: 100%;
        padding-top: 5px;
        padding-right: 20%;
    }
    .discussion-right{
        text-align: right;
        width: 100%;
        padding-top: 5px;
        padding-left: 20%;
    }
    .profile-img img{
        width: 50px;
        border-radius: 50%;
    }
    .profile-img{
        display: inline-block;
        padding: 5px;
        vertical-align: top;
        padding-top: 10px;
    }
    .discussion-text{
        display: inline-block;
        padding: 5px;
        width: 85%;
    }
    .discussion-comment{
        color: black;
    }
    .profile-name{
        font-size: 14px;
        font-weight: bold;
    }
    .discussion-date{
        color: #6f6f6f;
        font-size: 12px;
    }
    #new-comment{
        background-color: #038930;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        border: none;
        padding: 5px;
        padding-left: 25px;
        padding-right: 25px;
    }
    #new-comment:hover{
        cursor: pointer;
        background-color: #21ad50;
    }
</style>
<title>Assemble Point</title>
<div id="page-layout">
    <div id="page-layout-heading">
        <p>Discussion</p>
    </div>
    <div id="discussion-container-parent">
        <h3 id="project-name">Project Name</h3>
        <hr>
        <div id="discussion-status">
            <span><a>13 Comments</a></span>
            <span><a>Last interaction on 16 Aug 2018</a></span>
            <span><a>Load previous comments</a></span>
            <span><a>Jump to latest comment</a></span>
        </div>
        <hr>
        <div id="discussion-container">
            <div class="discussion-left">
                <span class="profile-img"><img src="<?php echo base_url('assets/img/getimage.jpg'); ?>"></span>
                <span class="discussion-text">
                    <h5 class="profile-name">Joseph Radel</h5>
                    <p class="discussion-comment">Praesent condimentum justo pharetra, venenatis turpis at, dapibus libero.
                        Nam dictum, nulla vitae facilisis dapibus, lorem lectus consequat leo, et eleifend urna magna vel eros. 
                        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Suspendisse vel velit non velit fringilla ultricies at ut erat.</p>
                    <p class="discussion-date">Commented on 13 May 2018</p>
                </span>
            </div>
            <div class="discussion-left">
                <span class="profile-img"><img src="<?php echo base_url('assets/img/harshitha.jpg'); ?>"></span>
                <span class="discussion-text">
                    <h5 class="profile-name">Harshitha Mavoori</h5>
                    <p class="discussion-comment">
                        Duis a convallis orci. Phasellus eu nibh nec turpis ornare molestie a sit amet leo. Nam fringilla neque quis velit commodo tristique. Nulla sed vehicula magna, ut suscipit odio.</p>
                    <p class="discussion-date">Commented on 15 May 2018</p>
                </span>
            </div>
            <div class="discussion-left">
                <span class="profile-img"><img src="<?php echo base_url('assets/img/harshitha.jpg'); ?>"></span>
                <span class="discussion-text">
                    <h5 class="profile-name">Harshitha Mavoori</h5>
                    <p class="discussion-comment">Phasellus sed augue eros.    nunc sit amet dui consectetur scelerisque. Nulla facilisi.
                        Donec a neque finibus, malesuada nisi quis, hendrerit ligula.   Donec tempor ex id est placerat convallis. Proin non imperdiet lectus. Donec aliquet odio in mi facilisis euismod. Mauris interdum eget tellus et porttitor. Praesent convallis tortor augue, sed fringilla justo accumsan vel.
                        <br><br>
                        Morbi tristique nibh nec risus efficitur feugiat. Praesent lorem neque, facilisis vitae bibendum eu, blandit sit amet nunc. Aliquam erat volutpat. Nam ac imperdiet lorem, maximus viverra purus.</p>
                    <p class="discussion-date">Commented on 18 May 2018</p>
                </span>
            </div>
            <div class="discussion-right">
                <span class="discussion-text">
                    <h5 class="profile-name">Ashwin Kumar C</h5>
                    <p class="discussion-comment">Sed laoreet risus ex, vel posuere mi laoreet in.   Proin venenatis metus a tellus scelerisque semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id velit eu turpis elementum viverra a ullamcorper sem. Quisque quis nisi feugiat, blandit enim at, maximus nunc.</p>
                    <p class="discussion-date">Commented on 20 May 2018</p>
                </span>
                <span class="profile-img"><img src="<?php echo base_url('assets/img/ashwin.jpg'); ?>"></span>
            </div>
            <div class="discussion-right">
                <span class="discussion-text">
                    <h5 class="profile-name">Ashwin Kumar C</h5>
                    <p class="discussion-comment">Sure. WIll do it.<br>
                        Thanks.</p>
                    <p class="discussion-date">Commented on 21 May 2018</p>
                </span>
                <span class="profile-img"><img src="<?php echo base_url('assets/img/ashwin.jpg'); ?>"></span>
            </div>
            <div class="discussion-left">
                <span class="profile-img"><img src="<?php echo base_url('assets/img/mahesh.jpg'); ?>"></span>
                <span class="discussion-text">
                    <h5 class="profile-name">Mahesh S</h5>
                    <p class="discussion-comment">Proin iaculis efficitur tincidunt. Sed molestie, diam a eleifend scelerisque, turpis massa volutpat velit, in tincidunt mauris nisi sit amet ante. Morbi quis porttitor turpis. Maecenas venenatis dignissim metus, ac molestie odio dapibus at. Cras sit amet commodo libero. Nulla a erat eu tortor pretium fringilla vel nec lectus. Vivamus facilisis vel ligula at fermentum.</p>
                    <p class="discussion-date">Commented on 23 May 2018</p>
                </span>
            </div>
            <div class="discussion-right">
                <span class="discussion-text">
                    <h5 class="profile-name">Ashwin Kumar C</h5>
                    <span class="discussion-comment">
                        <textarea style="width: 100%;height: 150px"></textarea>
                    </span>
                    <p class="discussion-date">Comment on 16 Aug 2018</p>       
                    <button id="new-comment">Comment</button>
                </span>
                <span class="profile-img"><img src="<?php echo base_url('assets/img/ashwin.jpg'); ?>"></span>
            </div>
        </div>
    </div>
</div>