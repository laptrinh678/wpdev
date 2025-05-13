<?php 
$post_id = isset($args['post_id']) ? $args['post_id'] : get_the_id();
$style = 'background-image:'.'url('.get_the_post_thumbnail_url($post_id,"large").')';
$loopIndex = isset($args['loop_index']) ? $args['loop_index'] : 0;
//style="background-image: url(https://www.bootdey.com/image/350x280/FF7F50/000000)"
?>
<?php if($loopIndex == 0 || $loopIndex ==1 ){ ?>
<!-- <div class="profile-img-list-item main"> 
    <a href="#" class="profile-img-list-link">
        <span class="profile-img-content">
        <?= get_the_post_thumbnail($post_id,"large");
        ?>
        
</div> -->
<div class="profile-img-list-item main">
    <a href="#" class="profile-img-list-link">
        <span class="profile-img-content" style="<?= $style; ?>">

        </span>
    </a>
</div>
       
<?php }else{ ?>
    <!-- <div class="profile-img-list-item"> 
    <a href="#" class="profile-img-list-link">
        <span class="profile-img-content">
        <?= get_the_post_thumbnail($post_id,"large");
        ?>
    </a>
</div -->
<div class="profile-img-list-item"><a href="#" class="profile-img-list-link"><span class="profile-img-content" style="<?= $style; ?>"></span></a></div>
       
<?php }?>