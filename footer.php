<?php
/**
 * footer 模版
 * 
 * @author: ngtwewy
 * @link https://javascript.net.cn/
 */

?>
		<footer>
			<div class="footer-container">
				<div class="footer-info">
					<div class="footer-info-title">
						<?php echo bloginfo('name');?>
					</div>
					<div class="footer-info-content">
						地址：郑州市高新区科学大道100号
					</div>
					<div class="footer-info-title">
						联系电话:
					</div>
					<div class="footer-info-content">
						18838006666<br>
						18238278888
					</div>
				</div>

				<?php 
				$nav_str = wp_nav_menu( array(  
					'theme_location'    => '', //[保留]用于在调用导航菜单时指定注册过的某一个导航菜单名，如果没有指定，则显示第一个  
					'menu'              => 'footer_menu', //[可删]使用导航菜单的名称调用菜单，可以是 id, slug, name (按顺序匹配的) 。  
					'container'         => false, //[可删]最外层容器标签名  
					'container_class'   => '',//[可删]最外层容器class名  
					'container_id'      => '',//[可删]最外层容器id值  
					'menu_class'        => 'footer-link-container', //[可删]ul 节点的 class 属性值  
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

				<div class="footer-info qrcode-container">
					<div class="footer-qrcode">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/qrcode.jpg">
						<div>扫一扫关注我</div> 
					</div>
				</div>
			</div>
			<!-- <div class="footer-container"> -->
			<div class="footer-bottom">
				<p class="copyright">
					&copy;
					<?php echo date("Y")?>
					<?php echo bloginfo('name');?> All Rights Reserved.
					<a href="http://www.beian.miit.gov.cn" rel="nofollow" target="_blank">豫ICP备20021888号-1</a>
					<script type="text/javascript" src="https://v1.cnzz.com/z_stat.php?id=1279246493&web_id=1279246493"></script>
				</p>
			</div>
			<!-- </div> -->

		</footer>

		<!-- 回到顶部 -->
		<a class="to-top" onclick="javascript:;" style="display: none;"></a>

		<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

		<?php wp_footer(); ?>
	</body>
</html>
