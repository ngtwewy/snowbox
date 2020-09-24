<?php
/**
 * The template for displaying single posts and pages.
 * 
 * @author: ngtwewy
 * @link https://javascript.net.cn/
 */

get_header();
?>

<?php 
setPostViews(get_the_ID()); // 更新文章浏览次数
?> 

	<div class="banner-container">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/banner/banner.png">
    </div>


    <div class="main-container">
        <div class="left-sider">
            <?php get_template_part( 'sider' ); ?>
        </div><!-- .left-sider -->

        <div class="right-sider">
			<div class="breadcrumbs">
                <span>当前位置：</span>
                <?php get_breadcrumbs();?>
            </div>

            <div class="singular-article-container">
                <div class="article-title">
					<?php the_title(); ?>
                </div>
                <div class="article-meta">
                    <span>阅读: <?php echo getPostViews(get_the_ID()); ?> </span>
                    <span>时间: <?php the_time('Y-m-d'); ?></span>
                    <span><a href="#">作者: admin</a></span>
                </div>
                <div class="article-content">
						<?php 
						if ( have_posts() ) {

							while ( have_posts() ) {
								the_post();
								the_content();
								// get_template_part( 'template-parts/content', get_post_type() );
							}
						}
						?>
                </div>
            </div>

        </div><!-- .right-sider -->
    </div>

<?php get_footer(); ?>
