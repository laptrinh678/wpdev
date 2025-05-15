<?php 
$post_id = isset($args['post_id']) ? $args['post_id'] : get_the_id();
$style = 'background-image:'.'url('.get_the_post_thumbnail_url($post_id,"large").')';
$src = get_the_post_thumbnail_url($post_id,"large");
$loopIndex = isset($args['loop_index']) ? $args['loop_index'] : 0;
$postUrl = isset($args['post_url']) ? $args['post_url'] : '';
//style="background-image: url(https://www.bootdey.com/image/350x280/FF7F50/000000)"
?>
<?php if($loopIndex == 0 || $loopIndex ==1 ){ ?>
<div class="profile-img-list-item main">
    <a href="<?= $postUrl;?>" class="profile-img-list-link">
        <img src="<?= $src; ?>" alt="">
        <!-- <span class="profile-img-content" style="<?= $style; ?>"> -->
       
        <!-- </span> -->
        <span class="profile-img-content"><?= get_the_title($post_id);?></span>
    </a>
</div>
       
<?php }else{ ?>

<div class="profile-img-list-item">
    <a href="<?= $postUrl;?>" class="profile-img-list-link">
        <img src="<?= $src; ?>" alt="">
        <span class="profile-img-content"><?= get_the_title($post_id);?></span>
      
    </a>
</div>
       
<?php }?>