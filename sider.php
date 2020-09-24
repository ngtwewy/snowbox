<div class="sider-box">
    <?php
    $parentMenu = get_menu_parent_by_id('Menu1');
    ?>
    <div class="sider-title">
        <?php echo $parentMenu['title'];?>
    </div>
    <ul class="sider-body">
        <?php
        foreach ($parentMenu['children'] as $k => $v) {
            if($v['my_current_object_id'] == $v['object_id']){
                $iactive = "iactive";
            }else{
                $iactive = "";
            }
        ?>
            <li class="<?php echo $iactive;?>">
                <!-- data-object-id="<?php echo $v['object_id'];?>" -->
                <!-- data-my_current_object_id="<?php echo $v['my_current_object_id'];?>" -->
                <a href="<?php echo $v['url'];?>" target="_parent"><?php echo $v['title'];?></a>
                <ul class="select"></ul>
            </li>
        <?php
        }
        ?>
    </ul>
    
    <?php
    /*
    <ul class="sider-body">
        <li><a href="#">支持服务</a></li>
        <li>
            <a href="#">支持服务-1</a>
            <ul class="select">
                <li><a href="#">支持服务-2</a></li>
                <li><a href="#">支持服务-2</a></li>
                <li><a href="#">支持服务-2</a></li>
                <li><a href="#">支持服务-2</a></li>
            </ul>
        </li>
        <li><a href="#">支持服务</a></li>
        <li><a href="#">支持服务</a></li>
    </ul>
    */
    ?>
</div>