<?php
/**
 * Header file 
 *
 * @author: ngtwewy
 * @link https://javascript.net.cn/
 */

?>

<!DOCTYPE html>
<html lang="zh">

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
		<?php
			// 这里是网站的关键词
			$keywords = "";
			// 这里是网站的描述
			$description = "";
			if (is_home()) {
				
			} elseif (is_category()) {
				$keywords = single_cat_title('', false);
				$description = category_description();
			} elseif (is_tag()) {
				$keywords = single_tag_title('', false);
				$description = tag_description();
			} elseif(is_single()){
				$description = get_the_excerpt();
			}
			$keywords = trim(strip_tags($keywords));
			$description = trim(strip_tags($description));
		?>
		<meta name="keyword" content="<?php echo $keywords ?>">
		<meta name="description" content="<?php echo $description ?>">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/style.css?v=1.0" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/swiper/swiper.css" />
		<script src="<?php bloginfo('template_url'); ?>/assets/swiper/swiper.min.js"></script>

		<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
		<style>
			.recentcomments a {
				display: inline !important;
				padding: 0 !important;
				margin: 0 !important;
			}
			.video-js, video{
				width: 100%;
				height: 100%;
			}
		</style>
	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		
		<header class="header">
			<a href="/" class="logo" title="" rel="home">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png">
			</a>
			<div class="header-right">
				<div>
					<a href="<?php bloginfo('url'); ?>/about">关于我们</a>
					<a href="<?php bloginfo('url'); ?>/contact">联系我们</a>
				</div>
				<div class="tel-widget">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/phone.png" alt="">
					<div>18866668888</div>
				</div>
			</div>
			<div class="menu-button" data-toggle="false">
				<i class="iconfont" style="display: none;">&#xf1b5;</i>
				<i class="iconfont" style="display: block;">&#xeffc;</i>
			</div>
		</header>



		<nav class="top-nav">
			<?php 
            $nav_str = wp_nav_menu( array(  
                'theme_location'    => '', //[保留]用于在调用导航菜单时指定注册过的某一个导航菜单名，如果没有指定，则显示第一个  
                'menu'              => 'Menu1', //[可删]使用导航菜单的名称调用菜单，可以是 id, slug, name (按顺序匹配的) 。  
                'container'         => false, //[可删]最外层容器标签名  
                'container_class'   => '',//[可删]最外层容器class名  
                'container_id'      => '',//[可删]最外层容器id值  
                'menu_class'        => 'nav-list', //[可删]ul 节点的 class 属性值  
                'menu_id'           => '', //[可删]ul 节点的 id 属性值  
                'echo'              => false, //[可删]确定直接显示导航菜单还是返回 HTML 片段，如果想将导航的代码作为赋值使用，可设置为false  
                'fallback_cb'       => 'wp_page_menu', //[可删]备用的导航菜单函数，用于没有在后台设置导航时调用  
                'before'            => '', //[可删]显示在导航a标签之前  
                'after'             => '', //[可删]显示在导航a标签之后    
                'link_before'       => '', //[可删]显示在导航链接名之前  
                'link_after'        => '', //[可删]显示在导航链接名之后  
                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  //[可删]使用字符串替换修改ul的class  
                'depth'             => 0, //[可删]显示菜单的深度, 当数值为0时显示所有深度的菜单，-1所有菜单平级显示  
                'walker'            => '' //[可删]自定义的遍历对象，调用一个对象定义显示导航菜单      
            ));

            echo str_replace('sub-menu', 'select', $nav_str);
            ?>
			<?php
			/**
			<!--
			<ul class="nav-list">
				<li><a href="/">首页</a></li>
				<li><a href="#">关于我们</a></li>
				<li>
					<a href="#">产品方案</a>
					<ul class="select">
						<li class="menu-item"><a href="#">通知公告1</a></li>
						<li class="menu-item"><a href="#">通知公告2</a></li>
						<li class="menu-item"><a href="#">通知公告3</a></li>
						<li class="menu-item"><a href="#">通知公告5</a></li>
						<li class="menu-item"><a href="#">通知公告6</a></li>
						<li class="menu-item"><a href="#">通知公告7</a></li>
						<li class="menu-item"><a href="#">通知公告8</a></li>
						<li class="menu-item"><a href="#">通知公告9</a></li>
					</ul>
				</li>
				<li>
					<a href="#">支持服务</a>
					<ul class="select">
						<li class="menu-item"><a href="#">新闻资讯子菜单测试1</a></li>
						<li class="menu-item"><a href="#">新闻资讯子菜单测试2</a></li>
						<li class="menu-item"><a href="#">新闻资讯子菜单测试3</a></li>
						<li class="menu-item"><a href="#">新闻资讯子菜单测试5</a></li>
						<li class="menu-item"><a href="#">新闻资讯子菜单测试6</a></li>
						<li class="menu-item"><a href="#">新闻资讯子菜单测试7</a></li>
						<li class="menu-item"><a href="#">新闻资讯子菜单测试8</a></li>
						<li class="menu-item"><a href="#">通新闻资讯子菜单测试</a></li>
					</ul>
				</li>
				<li><a href="#">合作加盟</a></li>
				<li><a href="#">行业资讯</a></li>
				<li><a href="#">联系我们</a></li>
			</ul>
			-->
			 */
			?>
		</nav>




		<?php
		// Output the menu modal.
		//get_template_part( 'template-parts/modal-menu' );
		?>
