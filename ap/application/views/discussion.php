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
        <h3 id="project-name"><?php echo $project_info['project_name']; ?></h3>
        <hr>
        <div id="discussion-status">
            <span>Showing latest comments</span>
            <span><a href="<?php echo base_url('discussion/project/'.$pid.'/all'); ?>">Show all comments</a></span>
            <span><a>Jump to latest comment</a></span>
        </div>
        <hr>
        <div id="discussion-container">
            <?php
            if ($comments) {
                $comments=  array_reverse($comments);
                foreach ($comments as $value) {
                    if ($value['uid'] == $uid) {
                        ?>
                        <div class="discussion-right">
                            <span class="discussion-text">
                                <h5 class="profile-name"><?php echo $value['user_full_name'] ?></h5>
                                <p class="discussion-comment"><?php echo $value['comment'] ?></p>
                                <p class="discussion-date">Commented on <?php echo $value['posted_on'] ?></p>
                            </span>
                            <span class="profile-img"><img src="<?php echo $value['profile_pic']; ?>"></span>
                        </div>
                    <?php } else {
                        ?>
                        <div class = "discussion-left">
                            <span class = "profile-img"><img src = "<?php echo $value['profile_pic']; ?>"></span>
                            <span class = "discussion-text">
                                <h5 class="profile-name"><?php echo $value['user_full_name'] ?></h5>
                                <p class="discussion-comment"><?php echo $value['comment'] ?></p>
                                <p class="discussion-date">Commented on <?php echo $value['posted_on'] ?></p>
                            </span>
                        </div>
                        <?php
                    }
                }
            }
            ?>            
            <?php if ($access == 'comment' OR $_SESSION['sudo']==TRUE) { ?>
                <div class="discussion-right">
                    <span class="discussion-text">
                        <form action="<?php echo base_url('discussion/comment'); ?>" method="post">
                            <h5 class="profile-name"><?php echo $_SESSION['user_full_name']; ?></h5>
                            <span class="discussion-comment">
                                <input type="text" value="<?php echo $pid; ?>" name="pid" style="display: none;">
                                <textarea name="comment" id="comment-box" style="width: 100%;height: 150px"></textarea>
                            </span>
                            <p class="discussion-date">Comment on <?php echo date('d M Y');?></p>       
                            <button type="submit" id="new-comment">Comment</button>                           
                        </form>
                    </span>
                    <span class="profile-img"><img src="<?php echo $_SESSION['profile_pic']; ?>"></span>
                </div>
            <?php } else { ?>
                <div class="discussion-right">
                    <span class="discussion-text">
                        <h5 class="profile-name"><?php echo $_SESSION['user_full_name']; ?></h5>
                        <span class="discussion-comment" style="color: red">
                            You cannot post comment in this project. Contact admin to get additional access.
                        </span>                        
                    </span>
                    <span class="profile-img"><img src="<?php echo $_SESSION['profile_pic']; ?>"></span>
                </div>
            <?php } ?>
        </div>
    </div>
</div>