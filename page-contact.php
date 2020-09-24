<?php
/**
 * Template Name: 单页 contact
 * Template Post Type: page
 */
/**
 * The template for displaying single posts and pages.
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

            <div class="singular-article-container form-container">
                <h2>联系我们</h2>
                <form id="contact-form" action="<?php bloginfo('siteurl')?>/wp-content/plugins/basicform/insert.php">
                    <div class="form-panel">
                        <p class="info">如您有任何问题，欢迎在上班时致电、Email给我们，或填写以下表格，我们会尽快回复您。</p>
                        <div class="form-group">
                            <label for="#">称呼：</label>
                            <input type="text" name="user_name" value="" placeholder="请输入您的称呼">
                        </div>
                        <div class="form-group">
                            <label for="#">电话：</label>
                            <input type="text" name="mobile" value="" placeholder="请输入您的手机号">
                        </div>
                        <div class="form-group">
                            <label for="#">地区：</label>
                            <input type="text" name="country"" value="" placeholder="请输入您的地区">
                        </div>
                        <div class="form-group">
                            <label for="#">需求登记：</label>
                            <textarea name="content" id="" cols="30" rows="10" placeholder="请输入合作需求"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="isubmit" type="button" onclick="javascript:;">提交</button>
                        </div>
                    </div>
                </form>
            </div>

        </div><!-- .right-sider -->
    </div>

    <script src="<?php bloginfo('template_url'); ?>/assets/js/axios.min.js"></script>
    <script>
    // window.onload = function(){
        function isubmit(){
            console.log("提交。。。");
            var f = document.querySelector('#contact-form');
			var formData = new FormData(f);
            axios({
                method: 'post',
                url: document.querySelector('#contact-form').getAttribute("action"),
                responseType: 'json',
                data: formData
            })
            .then(function (response) {
                if(response.data.code==true){
                    alert(response.data.msg);
                }else{
                    alert(response.data.msg);
                }
            })
            .catch(function (error) {
                console.log(error);
            });
        }
        document.querySelector(".isubmit").addEventListener("click",isubmit);
    // }
    </script>

<?php get_footer(); ?>
