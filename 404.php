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
        <div class="gd_head">
            <a href="<?php $this->options->siteUrl(); ?>">
                <img src="<?php echo $this->options->logoUrl(); ?>">
            </a>
        </div><br><br><br><br>
            <div class="gd_block">
                <div class="gd_menu">
                    <a href="<?php $this->options->siteUrl(); ?>">首页</a><?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}">{title}</a>'); ?>
                </div>
            </div>
        <div class="gd_main">
            <br><br><br>
            <div class="gd_block">
                <div class="gd_box gd_pd">
                    <div class="gd_img_100">
                        <img src="https://public.sourcegcdn.com/heikeji/wp-uploads/2022/04/bae2afb5ec6398474ea1c4c025d8efe8.png">
                    </div>
                    <br><h3 style="text-align: center">找不到当前页面了呜呜呜~</h3>
                    <h2 style="text-align: center"><a href="<?php $this->options->siteUrl(); ?>">返回首页</a></h2>
                </div>
            </div>
            <!--链接footer-->
            <div id="d" class="gd_block" style="height: 145px"></div>
            <div class="gd_copy">
                <?php include('footer.php') ?>
            </div>
        </div>
        <?php if($this->options->filecdn != null) { ?>
            <link rel="stylesheet" type="text/css" media="all" href="https://typecho.0qaq.com/2d4/free/static/js/main.js" />
        <?php } else { ?>
            <script src="<?php $this->options->themeUrl(); ?>static/js/main.js"></script>
        <?php } ?>
    </body>
</html>