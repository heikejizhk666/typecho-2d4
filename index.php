<?php
/**
 * 2d4主题是一款美观、高性能的博客主题。体积小，页面美观，适合个人和极客使用。
 * @package 2d4
 * @author Hi Tech
 * @version 1.3.0
 * @link https://www.314669.xyz/
 */

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
            <div class="eds_box eds_copy_middle">
                <h2><?php echo $this->options->hello(); ?></h2>
                <h3><?php echo $this->options->motto(); ?></h3>
            </div>
                <?php if(empty($this->options->indexSet) || in_array('hideslide', $this->options->indexSet) == null){ ?><div class="eds_block"><div class="eds_box eds_copy_middle eds_img_100"><img src="<?php $this->options->slide() ?>" /></div><?php } ?>
                <br>
                    <?php if(empty($this->options->indexSet) || in_array('hideyyimg', $this->options->indexSet) == null){ ?><div class="eds_box eds_copy_middle eds_img_100"><br><img src="<?php $this->options->yyimg() ?>"></div><?php } ?>
            <!--文章列表-->
            <div class="eds_block">
                <div class="eds_box">
                    <h3>文章列表</h3>
                    <?php while($this->next()): ?>
                    <div class="eds_block">
                        <a href="<?php $this->permalink() ?>">
                            <div class="eds_box eds_pd eds_c eds_copy_middle">
                                <img src="<?php $this->fields->postimg(); ?>" height="120px"><h2><?php $this->title() ?></h2>
                                <p>作者: <?php $this->author(); ?> 发布日期: <?php $this->date('Y F j'); ?></p>
                                <p><?php $this->commentsNum('评论 %d'); ?></p>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <!--链接footer-->
            <div id="d" class="eds_block" style="height: 145px"></div>
            <div class="eds_copy">
                <?php include('footer.php') ?>
            </div>
        </div>
        <script src="<?php $this->options->themeUrl(); ?>static/js/main.js"></script>
    </body>
</html>