<?php
/**
 * 2d4是一款简洁、美观、高性能博客主题。体积小，页面简洁，适合个人和极客使用。<br><a href="https://www.314669.xyz/2d4.html">主题下载</a>&nbsp;&nbsp;&nbsp;<a href="https://www.314669.xyz/2d4-docs.html">主题文档</a>&nbsp;&nbsp;&nbsp;<a href="https://jq.qq.com/?_wv=1027&k=TvHysSEV">QQ交流群</a>
 * @package 2d4
 * @author Hi Tech
 * @version 1.0.6
 * @link https://www.314669.xyz/
 */


/*温馨提示：请勿乱改代码，乱改出问题自理，不提供技术服务！*/

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
            <div class="gd_box gd_copy_middle">
                <h2><?php echo $this->options->hello(); ?></h2>
                <h3><?php echo $this->options->motto(); ?></h3>
            </div>
                <?php if(empty($this->options->otherSet) || in_array('hideslide', $this->options->otherSet) == null){ ?><div class="gd_block"><div class="gd_box gd_copy_middle gd_img_100"><img src="<?php $this->options->slide() ?>" /></div><?php } ?>
                <br>
                    <?php if(empty($this->options->otherSet) || in_array('hideyyimg', $this->options->otherSet) == null){ ?><div class="gd_box gd_copy_middle gd_img_100"><br><img src="<?php $this->options->yyimg() ?>"></div><?php } ?>
            <!--文章列表-->
            <div class="gd_block">
                <div class="gd_box">
                    <h3>文章列表</h3>
                    <?php while($this->next()): ?>
                    <div class="gd_block">
                        <a href="<?php $this->permalink() ?>">
                            <div class="gd_box gd_pd gd_c gd_copy_middle">
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
            <div id="d" class="gd_block" style="height: 145px"></div>
            <div class="gd_copy">
                <?php include('footer.php') ?>
            </div>
        </div>
        <script src="<?php $this->options->themeUrl(); ?>static/js/main.js"></script>
    </body>
</html>