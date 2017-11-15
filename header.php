<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/atom-one-light.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/layout.css'); ?>">
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
	<!-- 按钮 -->
	<a href="javascript:;" class="sidr-hide"><i class="fa fa-arrow-right"></i></a>
	<a href="javascript:;" class="sidr-show"><i class="fa fa-arrow-left"></i></a>
	<a href="javascript:;" class="weixin"><i class="fa fa-weixin"></i></a>
	<a href="javascript:;" class="liuyanban"><i class="fa fa-commenting"></i></a>
	<a href="javascript:;" class="top"><i class="fa fa-chevron-up"></i></a>
	<header>
            <nav id="header-bar" class="navbar navbar-default navbar-fixed-top headroom" role="navigation">
                  <div class="container">
                        <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right">
								<li>
								<a class="down-a"<?php if($this->is('index')): ?><?php endif; ?> href="<?php $this->options->siteUrl(); ?>">&nbsp;&nbsp;<?php _e('首页'); ?></a>
								</li>
								<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
								<?php while($pages->next()): ?>
								<li>                    
								<a class="down-a"<?php if($this->is('page', $pages->slug)): ?><?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">&nbsp;&nbsp;<?php $pages->title(); ?></a>
								</li>
								<?php endwhile; ?>
                              </ul>
                        </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
            </nav>
      </header>
	<div class="container">
		<div class="row page-main">
	    
    
