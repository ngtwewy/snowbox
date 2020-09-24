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

            <div class="product-page-list">
                <?php if ( have_posts() ) : ?>
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        // 控制只显示8篇文章，如果将8改成-1将显示所有文章
                        'showposts' => 9,
                        'paged' => $paged,
                        'cat' => $cat
                    );
                    query_posts($args);    
                    ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <a class="product-item" href="<?php the_permalink()?>">
                            <?php
                            $cur_post = get_post();
                            $thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id($cur_post->ID), 'full');
                            if(!empty($thumbnail_image)): 
                            ?>
                                <img src="<?php echo $thumbnail_image[0]?>" alt="<?php the_title(); ?>">
                            <?php else: ?>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/default.jpg">
                            <?php endif ?>
                            <div class="product-title"><?php the_title(); ?></div>
                            <?php if(get_the_excerpt()):?>
                                <div class="product-description"><?php the_excerpt(); ?></div>
                            <?php endif ?>
                        </a><!-- .product-item -->
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
