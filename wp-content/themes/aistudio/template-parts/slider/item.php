<?php 
$tagSlider = isset($args['tag-slider']) ? $args['tag-slider'] : null;
$args = [
    'posts_per_page' => 199, // Lấy chính xác 19 bài
    'tag'           => $tagSlider, // (nếu bạn muốn lọc theo tag)
];
query_posts($args);
while(have_posts()): the_post();
$tags = wp_get_post_tags(get_the_ID());
?> 
<div class="item">
    <a href="<?php the_permalink(); ?>" class="">
    <?= get_the_post_thumbnail(get_the_id(), 'medium');?>
    <strong><?= the_title(); ?></strong>
    </a>
</div>
<?php   endwhile; wp_reset_query(); ?>