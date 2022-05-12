<?php
/**
 * HighPress是一款简洁、美观、高性能博客主题。体积小，页面简洁，适合个人和极客使用。<br><a href="https://www.314669.xyz/highpress.html">主题下载</a>&nbsp;&nbsp;&nbsp;<a href="https://www.314669.xyz/highpress-docs.html">主题文档</a>&nbsp;&nbsp;&nbsp;<a href="https://jq.qq.com/?_wv=1027&k=TvHysSEV">QQ交流群</a>
 * @package HighPress
 * @author HighTech
 * @version 1.0.5
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
        <script src="<?php $this->options->themeUrl(); ?>js/main.js"></script>
    </body>
</html>