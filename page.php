<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include('header.php');
        ?>
    </head>
    <body>
        <div class="eds_head">
            <a href="<?php $this->options->siteUrl(); ?>">
                <img src="<?php echo $this->options->logoUrl(); ?>">
            </a>
        </div><br><br><br><br>
            <div class="eds_block">
                <div class="eds_menu">
                    <a href="<?php $this->options->siteUrl(); ?>">首页</a><?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}">{title}</a>'); ?>
                </div>
            </div>
        <div class="eds_main">
            <br><br><br>
            <div class="eds_block">
                <div class="eds_box eds_post_header">
                    <div>
                        <h1><?php $this->title() ?></h1>
                    </div>
                </div>
            </div>
            <div class="eds_block">
                <div class="eds_box eds_p">
                    <div class="eds_img_100">
                        <?php $this->content(); ?>
                    </div>
                </div>
            </div>
            <div class="eds_block">
                <div class="eds_box">
                    <?php $this->need('comments.php'); ?>
                </div>
            </div>
            <div id="d" class="eds_block" style="height: 145px"></div>
            <div class="eds_copy">
                <?php include('footer.php') ?>
            </div>
        </div>
        <script src="<?php $this->options->themeUrl(); ?>static/js/main.js"></script>
    </body>
</html>