<!--后台可直接关闭版权，请勿在此修改！-->
<script>console.log("\n %c 2d4主题 v1.2.0 %c by Hi Tech | www.314669.xyz", "color:#fff;background:#f39d2e;padding:5px 0;", "color:#eee;background:#444;padding:5px 10px;");
</script>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
    <div class="eds_copy_middle">
		<div class="eds_box">
			    <b>友情链接</b>
			    <?php Links_Plugin::output(); ?>
		</div>
			<br><br>
			<div class="eds_box">
			    <p>本站已运行<span id="momk"></span></p>
		    	Copyright &copy;<?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
			    <!--后台可直接关闭版权，请勿在此修改！-->
				<?php if(empty($this->options->copySet) || in_array('hidehpcopy', $this->options->copySet) == null){ ?><?php _e('Theme by <a href="https://www.314669.xyz/2d4.html">2d4-Pro</a>'); ?><?php } ?><br>
				<?php if(empty($this->options->footerSet) || in_array('hideicp', $this->options->footerSet) == null){ ?><img src="https://public.sourcegcdn.com/heikeji/corepress-static/img/icp.svg" style="width: 24px;height: 24px;"><a href="http://beian.miit.gov.cn/" target="_blank"><?php $this->options->icp() ?></a><?php } ?>
		    	<br><?php $this->options->footerCode() ?>
	</div>
			    <script language="javascript">
			    	function show_date_time(){
			    	window.setTimeout("show_date_time()", 1000);
			    	BirthDay=new Date("<?php $this->options->runtime() ?>");//建站日期（月/日/年）
			    	today=new Date();
			    	timeold=(today.getTime()-BirthDay.getTime());
				    sectimeold=timeold/1000
			    	secondsold=Math.floor(sectimeold);
			    	msPerDay=24*60*60*1000
			    	e_daysold=timeold/msPerDay
			    	daysold=Math.floor(e_daysold);
			    	e_hrsold=(daysold-e_daysold)*-24;
			    	hrsold=Math.floor(e_hrsold);
			    	e_minsold=(hrsold-e_hrsold)*-60;
			    	minsold=Math.floor((hrsold-e_hrsold)*-60);
			    	seconds=Math.floor((minsold-e_minsold)*-60);
			    	momk.innerHTML=daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒" ;
			    	}
			    	show_date_time();
			    </script>
			</div>
        <script>
            function suit(){
                if($(".eds_main").width() >= 760){
                    $(".eds_main").css('left', ($(window).width() / 2 - 400));
                }
                else{
                    $(".eds_main").css('left', 'calc(10% - 20px)');
                }
                $("#d").css('height', $(".eds_copy").height() + 40);
            }
            suit();
            $(window).resize(function(){
                suit();
            });
        </script>
<?php $this->footer(); ?>
</body>
</html>
