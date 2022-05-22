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
                <div class="gd_box gd_post_header">
                    <div>
                        <h1><?php $this->title() ?></h1>
                        <p>作者: <?php $this->author(); ?> 日期: <?php $this->date('c'); ?></p>
                        <p> 分类: <?php $this->category(','); ?> 标签: <?php $this->tags(', ', true, 'none'); ?></p>
                    </div>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_box gd_p">
                    <div class="gd_img_100">
                        <?php $this->content(); ?>
                    </div>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_box">
                    <b>版权声明</b><br>
                    <?php $this->fields->postcopy(); ?>
                </div>
            </div>
            <div class="gd_block">
                <div class="gd_box">
                    <?php $this->need('comments.php'); ?>
                </div>
            </div>
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