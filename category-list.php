<?php
/**
 * 文章列表页 按类别请求帖子时，将使用类别模板
 * 
 * @author: ngtwewy
 * @link https://javascript.net.cn/
 */

get_header();
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

            <!-- 文章列表 -->
            <div class="media-list">

                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <!-- li>
                            <i></i>
                            <a href="<?php the_permalink()?>" target="_blank"><?php the_title(); ?></a> 
                            <span><?php the_time() ?></span>
                        </li-->
                        <div class="media-item">
                            <div class="media-title">
                                <a href="<?php the_permalink()?>" target="_blank"><?php the_title(); ?></a>
                            </div>
                            <div class="media-widget">
                                <div class="media-widget-left">
                                    <div class="media-author">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/test.jpg">
                                        admin
                                    </div>
                                    <div class="media-description">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                                <?php
                                $cur_post = get_post();
                                $thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id($cur_post->ID), 'full');
                                if(!empty($thumbnail_image)): 
                                ?>
                                    <div class="media-widget-right">
                                        <img src="<?php echo $thumbnail_image[0];?>">
                                    </div>
                                <?php endif ?>
                            </div>
                            <div class="media-info">阅读 暂无评论 <?php the_time('Y-m-d'); ?> </div>
                        </div --><!-- ./ media-item -->
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <!-- 分页 -->
            <?php
                the_posts_pagination(array(
                    'mid_size' => 3, 
                    'prev_text' => '<', 
                    'next_text' => '>',
                    'screen_reader_text' => ' ',
                    'aria_label' => "xxx",
                ));
            ?>
            

        </div><!-- .right-sider -->
    </div>


<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
