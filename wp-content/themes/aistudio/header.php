<?php 
global $theme_uri;
// $menu = wp_nav_menu();
// print_r($menu)
$menu_locations = get_nav_menu_locations();
$menuId = $menu_locations['primary'];
// echo $menuId;
// die();
$menu = wp_get_nav_menu_items($menuId);
//print_r($menu);
 ?>
<header>
      <div class="row" style="background: black;">
        <div class="col-md-4" style="padding-top: 10px;">
          <a href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo $theme_uri; ?>/images/logo.png" alt=""></a>
        </div>
        <div class="col-md-6">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <?php foreach($menu as $itemMenu) { 
                   $arrMenuChildCurrent = [];
                ?>
                <?php if($itemMenu->menu_item_parent == 0){ 
                  $filtered_items = wp_list_filter($menu, ['menu_item_parent' => $itemMenu->ID]);

                  ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="<?= $itemMenu->url; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php 
                    //print_r($itemMenu);
                     echo $itemMenu->title;
                    ?>
                    <?php if(count($filtered_items)>0) {?>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <i class="fa fa-angle-up disabled" aria-hidden="true"></i>
                    <?php } ?>
                  </a>
                  <?php if(count($filtered_items)>0){ ?>
                  <?php if(sanitize_title($itemMenu->title) == 'cong-cu') { ?>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="row">
                      <div class="col-4">
                        <ul class="list-group">
                          <?php foreach($filtered_items as $filtered_item) { ?>
                          <li class="list-group-item" c-data="<?= sanitize_title($filtered_item->title);?>" > 
                            <a href="javascript:void(0)">
                            <?php if(sanitize_title($filtered_item->title) =='video'){  ?>
                            <i class="fa fa-video-camera" aria-hidden="true"></i>
                            <?php } ?>
                            <?php if(sanitize_title($filtered_item->title) =='hinh-anh'){  ?>
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                            <?php } ?>
                            <?php if(sanitize_title($filtered_item->title) == 'am-thanh'){  ?>
                            <i class="fa fa-volume-up" aria-hidden="true"></i>
                            <?php } ?>
                            <?php echo $filtered_item ->title ?>
                            </a>
                          </li>
                          <?php } ?>
                        </ul>
                      </div>
                      <?php if(sanitize_title($itemMenu->title) =='cong-cu'){ ?>
                      <div class="col-8" style="padding-left: 0px;">
                        <ul class="item-menu-child">
                        <?php 
                        foreach($filtered_items as $filtered_data) {
                          $className = !(sanitize_title($filtered_data->title) == 'hinh-anh') ? 'w-100 disabled' :'w-100';
                          $query_args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => 4, // Giới hạn 5 bài
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => $filtered_data->object,
                                        'field'    => 'term_id',
                                        'terms'    => $filtered_data->object_id,
                                    ),
                                ),
                            );
                          $custom_query = new WP_Query($query_args);
                          ?>
                          <div class="<?= $className ;?>" id="<?= sanitize_title($filtered_data->title);?>">

                          <?php
                            if ($custom_query->have_posts()) {
          
                              while ($custom_query->have_posts()) : $custom_query->the_post();
                                  get_template_part('template-parts/menu/item', null, [
                                      'post_id'  => get_the_ID(),
                                      'post_url' => get_permalink(),
                                      'excerpt' => get_the_excerpt(),
                                      'menu_item_id' => $itemMenu->object_id // Truyền thêm object_id
                                  ]);
                              endwhile;
                              wp_reset_postdata();
                          }
                          ?>
                            

                            
                          </div>
                        <?php } ?>
                        </ul>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                <?php }else { ?>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php foreach($filtered_items as $dropdownSimple){ ?>
                    <a class="dropdown-item" href="<?= $dropdownSimple->url; ?>">  
                    <?php
                      switch ($dropdownSimple->post_name) {
                        case "marketting":
                          echo '<i class="fa fa-star" aria-hidden="true"></i>';
                          break;
                        case "thuong-mai-dien-tu":
                          echo '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
                          break;
                        case "sang-tao-noi-dung":
                          echo '<i class="fa fa-lightbulb-o" aria-hidden="true"></i>';
                          break;
                        case "dao-tao":
                          echo '<i class="fa fa-book" aria-hidden="true"></i>';
                          break;
                        case "ve-aistudio":
                          echo '<i class="fa fa-grav" aria-hidden="true"></i>';
                        break;
                        case "blog":
                          echo '<i class="fa fa-newspaper-o" aria-hidden="true"></i>';
                        break;
                        case "lien-he":
                          echo '<i class="fa fa-address-book-o" aria-hidden="true"></i>';
                          break;
                        case "chuong-trinh-affliate":
                          echo '<i class="fa fa-handshake-o" aria-hidden="true"></i>';
                      }
                    ?>
                      <?php echo $dropdownSimple->title; ?>
                    </a>
                    <?php }?>
                  </div>
                <?php } ?>
                <?php }?>
                </li>
                <?php } ?>
                <?php } ?>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-md-2" style="padding-top: 5px;">
          <button class="bg-full btn-login" style="margin-right: 25px;" href="#">Đăng nhập</button>
          <button class="btn btn-lang" >EN</button>
        </div>
      </div>
    </header>
    <div class="slider">
      <h2 class="text-center text-white" style="padding-top: 150px;
      font-weight: 1000;">Hiện thực hóa ý tưởng với AI Studio</h2>
      <p class="text-center text-white">Trọn bộ công cụ AI sáng tạo nội dung: tạo hình ảnh, video, giọng nói,... chỉ trong vài giây 
        <br> <br>
        <button class="btn btn-danger bg-full btn-style"> Đăng ký sử dụng</button>
      </p>
        <div class="container slider-item d-flex p-3 text-white">
          <div class="p-2 col-md-2">
            <ul class="list-group changeTabSlide">
              <li class="list-group-item" c-data="noi-bat"> <i class="fa fa-star" aria-hidden="true"></i>Nổi bật</li>
              <li class="list-group-item" c-data="hinh-anh"><i class="fa fa-picture-o" aria-hidden="true"></i>Hình ảnh</li>
              <li class="list-group-item" c-data="video"><i class="fa fa-video-camera" aria-hidden="true"></i>Video</li>
              <li class="list-group-item" c-data="am-thanh"><i class="fa fa-volume-up" aria-hidden="true"></i> Âm thanh</li>
            </ul>
          </div>
          <div class="p-2 col-md-10 slider-carosel">
            <?php 
            $arrTagShow = ['hinh-anh','video', 'noi-bat', 'am-thanh'];
            ?>
            <?php foreach($arrTagShow as $tagShow) { ?>
              <div class="owl-carousel itemSlider owl-theme <?= 'slider-'.$tagShow ;?> <?= $tagShow == 'hinh-anh' ? 'show' : 'hide' ;?> ">
                <?php get_template_part('template-parts/slider/item', null, ['tag-slider'=>$tagShow]);?>
              </div>
            <?php } ?>
          </div>
        </div>
    </div>
    