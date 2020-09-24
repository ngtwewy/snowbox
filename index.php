<?php
/**
 * 主模版文件
 * 
 * @author: ngtwewy
 * @link https://javascript.net.cn/
 */

get_header();
?>


    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php query_posts('cat=13&posts_per_page=3'); while(have_posts()): the_post(); ?>
                <?php
                $thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_post()->ID), 'full');
                if(!empty($thumbnail_image)){
                    $slider_src = $thumbnail_image[0];
                }else{
                    $slider_src = bloginfo('template_url') . "/assets/images/default.jpg";
                }
                ?>
                <div class="swiper-slide">
                    <img src="<?php echo $slider_src; ?>"/>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <?php $product_id = 6; ?>
    <div class="product-container">
        <div class="widget-header">
            <div class="widget-one">
                <span><?php echo get_term_by('id', $product_id, 'category')->name ?></span>
            </div>
            <a href="<?php echo get_category_link($product_id) ?>" target="_blank">更多></a>
        </div>
        <div class="product-list">
            <?php query_posts("cat=$product_id&posts_per_page=8"); while(have_posts()): the_post(); ?>  
                <a class="product-item" href="<?php the_permalink(); ?>" target="_blank">
                    <?php
                        $cur_post = get_post();
                    $thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id($cur_post->ID), 'full');
                    if(!empty($thumbnail_image)): 
                    ?>
                        <img src="<?php echo $thumbnail_image[0]?>" alt="<?php the_title(); ?>">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/default.jpg">
                    <?php endif ?>
                    <div class="product-title"><?php the_title() ?></div>
                    <?php if(get_the_excerpt()):?>
                        <div class="product-description">
                            <?php the_excerpt(); ?>
                        </div>
                    <?php endif?>
                </a><!-- .product-item -->
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>


    <div class="info-container">
        <div class="info-section1">
            <?php $news_id = 2; ?>
            <div class="widget-header">
                <div class="widget-one">
                    <span><?php echo get_term_by('id', $news_id, 'category')->name ?></span>
                </div>
                <a href="<?php echo get_category_link($news_id) ?>" target="_blank">更多></a>
            </div>
            <div class="news-list">
                <?php query_posts("cat=$news_id&posts_per_page=7"); while(have_posts()): the_post(); ?>  
                    <div><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title() ?></a></div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
        <div class="info-section2">
            <?php $news_id = 3; ?>
            <div class="widget-header">
                <div class="widget-one">
                    <span><?php echo get_term_by('id', $news_id, 'category')->name ?></span>
                </div>
                <a href="<?php echo get_category_link($news_id) ?>" target="_blank">更多></a>
            </div>
            <div class="news-list">
                <?php query_posts("cat=$news_id&posts_per_page=7"); while(have_posts()): the_post(); ?>  
                    <div><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title() ?></a></div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
        <div class="info-section3">
            <div class="widget-header">
                <div class="widget-one">
                    <span>公司简介</span>
                </div>
                <a href="<?php echo get_permalink(5); ?>" target="_blank">更多></a>
            </div>
            <img class="address-pic" src="<?php bloginfo('template_url'); ?>/assets/images/address.jpg">
            <div class="address-description">
                某某传媒有限公司成立于2020年06月08日，注册地位于郑州航空港经济综合实验区。经营范围包括销售：建筑材料、装饰材料、钢材、橡胶制品、五金交电、水暖器材、防水材料、塑料制品、石材、木材、日用百货、电线电缆、机械设备...
            </div>
        </div>
    </div>




    <?php $product_id = 14; ?>
    <div class="product-container">
        <div class="widget-header">
            <div class="widget-one">
                <span><?php echo get_term_by('id', $product_id, 'category')->name ?></span>
            </div>
            <a href="<?php echo get_category_link($product_id) ?>" target="_blank">更多></a>
        </div>
        <div class="product-list">
            <?php query_posts("cat=$product_id&posts_per_page=4"); while(have_posts()): the_post(); ?>  
                <a class="product-item" href="<?php the_permalink(); ?>" target="_blank">
                    <?php
                        $cur_post = get_post();
                    $thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id($cur_post->ID), 'full');
                    if(!empty($thumbnail_image)): 
                    ?>
                        <img src="<?php echo $thumbnail_image[0]?>" alt="<?php the_title(); ?>">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/default.jpg">
                    <?php endif ?>
                    <div class="product-title"><?php the_title() ?></div>
                    <!-- <div class="product-description"> -->
                        <?php //the_excerpt(); ?>
                    <!-- </div> -->
                </a><!-- .product-item -->
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>


<?php
get_footer();
