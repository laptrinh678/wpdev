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
          <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $theme_uri; ?>/images/logo.png" alt=""></a>
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
                          <?php foreach($filtered_items as $filtered_items) { ?>
                          <li class="list-group-item" c-data="<?= sanitize_title($filtered_items->title);?>" > 
                            <a href="javascript:void(0)">
                            <?php if(sanitize_title($filtered_items->title) =='video'){  ?>
                            <i class="fa fa-video-camera" aria-hidden="true"></i>
                            <?php } ?>
                            <?php if(sanitize_title($filtered_items->title) =='hinh-anh'){  ?>
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                            <?php } ?>
                            <?php if(sanitize_title($filtered_items->title) == 'am-thanh'){  ?>
                            <i class="fa fa-volume-up" aria-hidden="true"></i>
                            <?php } ?>
                            <?php echo $filtered_items ->title ?>
                            </a>
                          </li>
                          <?php } ?>
                        </ul>
                      </div>
                      <?php if(sanitize_title($itemMenu->title) =='cong-cu'){ ?>
                      <div class="col-8" style="padding-left: 0px;">
                        <ul class="item-menu-child">
                          <div class="w-100" id="hinh-anh">
                            <li class="w-50">
                              <p><strong>Tạo ảnh từ văn bản</strong></p>
                              <div class="content">
                                Framer is a web builder for creative pros. Be sure to check out framer.com to learn more.
                              </div>
                            </li>
                            <!-- <li class="w-50">
                              <p><strong>Tạo ảnh từ phác thảo</strong></p>
                              <div class="content">
                                Framer is a web builder for creative pros. Be sure to check out framer.com to learn more.
                              </div>
                            </li>
                            <li class="w-50">
                              <p><strong>Tạo ảnh tương tư</strong></p>
                              <div class="content">
                                Framer is a web builder for creative pros. Be sure to check out framer.com to learn more.
                              </div>
                            </li>
                            <li class="w-50">
                              <p><strong>Chỉnh sửa ảnh</strong></p>
                              <div class="content">
                                Framer is a web builder for creative pros. Be sure to check out framer.com to learn more.
                              </div>
                            </li> -->
                          </div>
                          <!-- <div class="w-100 disabled" id="video">
                            <li class="w-50">
                              <p> <strong>Mc ảo phông xanh</strong></p>
                              <div class="content">
                                Framer is a web builder for creative pros. Be sure to check out framer.com to learn more.
                              </div>
                            </li>
                            <li class="w-50">
                              <p> <strong>Mc ảo kịch bản</strong></p>
                              <div class="content">
                                Framer is a web builder for creative pros. Be sure to check out framer.com to learn more.
                              </div>
                            </li>
                          </div> -->
                          <!-- <div class="w-100 disabled" id="am-thanh">
                            <li class="w-50">
                              <p> <strong>Văn bản thành giọng nói</strong></p>
                              <div class="content">
                                Framer is a web builder for creative pros. Be sure to check out framer.com to learn more.
                              </div>
                            </li>
                            <li class="w-50">
                              <p> <strong>Giọng nói thành văn bản</strong></p>
                              <div class="content">
                                Framer is a web builder for creative pros. Be sure to check out framer.com to learn more.
                              </div>
                            </li>
                          </div> -->
                         
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
            <ul class="list-group">
              <li class="list-group-item"> <i class="fa fa-star" aria-hidden="true"></i>Nổi bật</li>
              <li class="list-group-item"><i class="fa fa-picture-o" aria-hidden="true"></i>Hình ảnh</li>
              <li class="list-group-item"><i class="fa fa-video-camera" aria-hidden="true"></i>Video</li>
              <li class="list-group-item"><i class="fa fa-volume-up" aria-hidden="true"></i> Âm thanh</li>
            </ul>
          </div>
          <div class="p-2 col-md-10">
            <div class="owl-carousel owl-theme owl-slider">
              <?php while(have_posts()): the_post(); ?>
              <div class="item">
                <!-- <img src="<?php echo $theme_uri; ?>/images/s1.png"  alt=""> -->
                 <?php 
                 $tags = get_the_tags();
                 $tagSlugs = [];
                 if ($tags) {
                      foreach ($tags as $tag) {
                          $tagSlugs[] = $tag->slug;
                      }
                  }
                  ?>
                 <a href="<?php the_permalink(); ?>" class="<?= $tagSlugs[0]; ?>">
                  <?= get_the_post_thumbnail(get_the_id(), 'medium');?>
                  <strong><?= the_title(); ?></strong>
                </a>
              </div>
              <?php endwhile ?>
            </div>
          </div>
        </div>
    </div>
    