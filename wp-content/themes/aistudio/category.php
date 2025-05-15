<?php
global $wp_query;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $wp_query->queried_object->cat_name ?? 'danh sách'; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $theme_uri; ?>/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $theme_uri; ?>/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo $theme_uri; ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo $theme_uri; ?>/css/category.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<div class="container-fluid" id="single" c-data="no-slider">
    <?php get_header(); ?>
    <div class="container profile mb-4 pd-t-30">
      <div class="row">
          <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= esc_url(home_url('/')); ?>">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $wp_query->queried_object->cat_name ?? 'Danh sách bài viết'; ?></li>
          </ol>
        </nav>
      </div>
      <div class="row">
          <div class="profile-img-list">
              <?php 
              while ( have_posts() ) : the_post();?>
                  <?php get_template_part('template-parts/post/item', null, [
                    'post_id'=>get_the_id(), 
                    'loop_index' => $wp_query->current_post,
                    'post_url' => get_permalink()
                    ]) ?>
              <?php endwhile; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12 pd-t-30 text-center">
          <?= get_the_posts_pagination(); ?>
        </div>
      </div>
</div>
</div>



<?php get_footer(); ?>
<script src="<?php echo $theme_uri; ?>/owl/jquery.min.js"></script>
<script src="<?php echo $theme_uri; ?>/owl/owl.carousel.js"></script>
<script src="<?php echo $theme_uri; ?>/js/home.js"></script>
<script src="<?php echo $theme_uri; ?>/js/single.js"></script>