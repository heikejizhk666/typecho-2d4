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
                <div class="eds_box eds_pd">
                    <br><h3 style="text-align: center">找不到当前页面了呜呜呜~</h3>
                    <h2 style="text-align: center"><a href="<?php $this->options->siteUrl(); ?>">返回首页</a></h2>
                </div>
            </div>
            <!--链接footer-->
            <div id="d" class="eds_block" style="height: 145px"></div>
            <div class="eds_copy">
                <?php include('footer.php') ?>
            </div>
        </div>
        <script src="<?php $this->options->themeUrl(); ?>js/main.js"></script>
    </body>
</html>