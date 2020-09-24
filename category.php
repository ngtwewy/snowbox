<?php
/**
 * 不同分类使用不同模版
 */

global $wp_query;
$cat_ID = get_query_var('cat');
$currentCategory = get_category($cat_ID);
// p($currentCategory);
$prefix = substr($currentCategory->slug, 0, 8);

if($prefix == "products"){
    get_template_part('category-products');
}elseif($prefix == "case"){
    get_template_part('category-products');
}else{
    get_template_part('category-list');
}
?>

