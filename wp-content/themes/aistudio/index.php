<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aistudio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $theme_uri; ?>/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $theme_uri; ?>/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo $theme_uri; ?>/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
    <?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-9 pd-t-30" style="margin: auto;">
          <h3 class="text-center pd-t-30"><img src="<?php echo $theme_uri; ?>/images/s-text.png" alt=""></h3>
          <p class="text-center">Sáng tạo, chia sẻ và lấy cảm hứng từ cộng đồng</p>
          <div class="text-center pd-t-30">
            <div class="d-flex text-white switch">
              <a class="item-picture text-white" href="javascript:void(0)">Hình ảnh</a>
              <a class="bg-dark item-video text-white" href="javascript:void(0)">Video</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row pd-t-30">
        <div class="owl-carousel owl-picture owl-theme">
          <div class="item">
            <ul class="list-group">
              <li class="list-group-item"><img src="<?php echo $theme_uri; ?>/images/s9.png"  alt=""></li>
              <li class="list-group-item"><img src="<?php echo $theme_uri; ?>/images/s10.png"  alt=""></li>
            </ul>
          </div>
          <div class="item">
            <ul class="list-group">
              <li class="list-group-item"><img src="<?php echo $theme_uri; ?>/images/s11.png"  alt=""></li>
              <li class="list-group-item"><img src="<?php echo $theme_uri; ?>/images/s12.png"  alt=""></li>
            </ul>
          </div>
        </div>
        <p class="text-center pd-t-30"><button class="btn btn-danger bg-full btn-style"> Khám phá ngay</button></p>
        <p class="text-center"><img src="<?php echo $theme_uri; ?>/images/s-text2.png" alt=""></p>
        <p class="text-center">Tối ưu quy trình sáng tạo nội dung trong các lĩnh vực Marketing, E-commerce, Đào tạo và Sáng tạo nội dung số</p>
      </div>
      <div class="row pd-b-30">
        <div class="col-md-6">
          <img src="<?php echo $theme_uri; ?>/images/s14.png" alt="">
        </div>
        <div class="col-md-6">
          <div class="list-group item-lv">
            <a href="javascript:void(0)" class="list-group-item list-group-item-action active" aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Marketing</h5>
                <small>
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                  <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </small>
              </div>
              <p class="mb-1">Tạo hình ảnh, video quảng cáo, nội dung mạng xã hội,... nhanh chóng</p>
              <small><i class="fa fa-arrow-right" aria-hidden="true"></i> <img src="<?php echo $theme_uri; ?>/images/th.png" alt=""></small>
            </a>

            <a href="javascript:void(0)" class="list-group-item list-group-item-action" aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Sáng tạo nội dung</h5><small>
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                  <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </small>
              </div>
              <p class="mb-1 disabled">Tạo hình ảnh, video quảng cáo, nội dung mạng xã hội,... nhanh chóng22</p>
              <small class="disabled"><i class="fa fa-arrow-right" aria-hidden="true"></i> <img src="<?php echo $theme_uri; ?>/images/th.png" alt=""></small>
            </a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action" aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Thương mại điện tử</h5><small>
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                  <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </small>
              </div>
              <p class="mb-1 disabled">Tạo hình ảnh, video quảng cáo, nội dung mạng xã hội,... nhanh chóng333</p>
              <small class="disabled"><i class="fa fa-arrow-right" aria-hidden="true"></i> <img src="<?php echo $theme_uri; ?>/images/th.png" alt=""></small>
            </a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action" aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Đào tạo</h5><small>
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                  <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </small>
              </div>
              <p class="mb-1 disabled">Tạo hình ảnh, video quảng cáo, nội dung mạng xã hội,... nhanh chóng444</p>
              <small class="disabled"><i class="fa fa-arrow-right" aria-hidden="true"></i> <img src="<?php echo $theme_uri; ?>/images/th.png" alt=""></small>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="partner">
      <p class="text-center"><img src="<?php echo $theme_uri; ?>/images/partner.png" alt=""></p>
      <div class="row">
        <div class="owl-carousel owl-partner owl-theme">
          <div class="item">
           <img src="<?php echo $theme_uri; ?>/images/p1.png" alt="">
          </div>
          <div class="item">
            <img src="<?php echo $theme_uri; ?>/images/p2.png" alt="">
          </div>
          <div class="item">
            <img src="<?php echo $theme_uri; ?>/images/p3.png" alt="">
          </div>
          <div class="item">
            <img src="<?php echo $theme_uri; ?>/images/p4.png" alt="">
          </div>
          <div class="item">
            <img src="<?php echo $theme_uri; ?>/images/p5.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="blog container">
      <div class="row">
       <div class="col-md-8 mg-auto">
        <ul class="nav nav-tabs" role="tablist">
          <span class="blog-name"><img src="<?php echo $theme_uri; ?>/images/blog.png" alt=""></span>
          <li class="nav-item pd-l-30">
            <a class="nav-link active" data-bs-toggle="tab" href="#home">Cập nhật</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#compare">So sánh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#menu1">Câu chuyện</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#menu2">Hướng dẫn</a>
          </li>
        </ul>
       </div>
      </div>
    </div>
      <div class="tab-content container blog-status">
        <div id="home" class="tab-pane active row"><br>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n1.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n1.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n1.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
        </div>
        <div id="compare" class="row tab-pane"><br>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n4.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n4.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n4.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
        </div>
        <div id="menu1" class="row tab-pane fade"><br>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n3.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n3.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n3.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
        </div>
        <div id="menu2" class="row tab-pane fade"><br>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n2.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n2.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item-news w-100">
              <img class="w-100" src="<?php echo $theme_uri; ?>/images/n2.png" alt="">
              <div class="content w-100 p-4">
                <h3 class="text-white"><strong>Tin tức</strong></h3>
                <p class="text-white">Use positioning to fix topbars, sidebars, and backgrounds.</p>
                <a href=""><p class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>Tìm hiểu thêm</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php get_footer(); ?>
  </div>


</body>
</html>
<script src="<?php echo $theme_uri; ?>/owl/jquery.min.js"></script>
<script src="<?php echo $theme_uri; ?>/owl/owl.carousel.js"></script>
<script src="<?php echo $theme_uri; ?>/js/home.js"></script>
