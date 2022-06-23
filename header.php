<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title><?php $this->options->title() ?></title>
        <?php if($this->options->jqueryUrl != null) { ?>
            <script src="<?php $this->options->jqueryUrl() ?>"></script>
        <?php } else { ?>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <?php } ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
        <link rel="icon" href="<?php $this->options->faviconUrl() ?>">
        <?php $this->options->HeaderCode() ?>
        <?php $this->header(); ?>
        <style>
            <?php $this->options->cssCode() ?>
            <?php if ($this->options->cur): ?>html,body,head{cursor: url(<?php $this->options->themeUrl(''); ?>static/mouse/normal.cur), default;}a:hover,.cursor:hover,button:hover,svg:hover{cursor:url(<?php $this->options->themeUrl(''); ?>static/mouse/link.cur), pointer;}<?php endif; ?>
            html,body{background-image: url('<?php $this->options->backgroundimg() ?>')!important;background-position: center center;background-attachment: fixed;}
            <?php if ($this->options->font): ?>@font-face {font-family:HarmonyOS_Sans_SC_Medium;font-style: normal;font-display: swap;src: url('<?php $this->options->themeUrl(''); ?>static/font/harmonyos.woff2') format('woff2'),url('<?php $this->options->themeUrl(''); ?>static/font/harmonyos.woff') format('woff');}*{font-family:HarmonyOS_Sans_SC_Medium;}<?php endif; ?>
        </style>
