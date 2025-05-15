<?php 
$postId = isset($args['post_id']) ? $args['post_id'] : null;
$postUrl = isset($args['post_url']) ? $args['post_url'] : null;
$excerpt = isset($args['excerpt']) ? $args['excerpt'] : null;
?>
<li class="w-50">
<a href="<?= $postUrl; ?>"><p><strong><?= get_the_title($postId); ?></strong></p></a>
    <div class="content">
        <?= $excerpt; ?>
    </div>
</li>
