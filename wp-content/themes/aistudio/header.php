<?php global $theme_uri; ?>
<header>
      <div class="row" style="background: black;">
        <div class="col-md-4" style="padding-top: 10px;">
          <img src="<?php echo $theme_uri; ?>/images/logo.png" alt="">
        </div>
        <div class="col-md-6">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Công cụ
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <i class="fa fa-angle-up disabled" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="row">
                      <div class="col-4">
                        <ul class="list-group">
                          <li class="list-group-item" c-data="picture" > <i class="fa fa-picture-o" aria-hidden="true"></i>Hình ảnh</li>
                          <li class="list-group-item" c-data="video"><i class="fa fa-video-camera" aria-hidden="true"></i>Video</li>
                          <li class="list-group-item" c-data="audio"><i class="fa fa-volume-up" aria-hidden="true"></i>Âm thanh</li>
                        </ul>
                      </div>
                      <div class="col-8" style="padding-left: 0px;">
                        <ul class="item-menu-child">
                          <div class="w-100" id="picture">
                            <li class="w-50">
                              <p><strong>Tạo ảnh từ văn bản</strong></p>
                              <div class="content">
                                Framer is a web builder for creative pros. Be sure to check out framer.com to learn more.
                              </div>
                            </li>
                            <li class="w-50">
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
                            </li>
                          </div>
                          <div class="w-100 disabled" id="video">
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
                          </div>
                          <div class="w-100 disabled" id="audio">
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
                          </div>
                         
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Giải pháp
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <i class="fa fa-angle-up disabled" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">  <i class="fa fa-star" aria-hidden="true"></i>Marketting</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Thương mại điện tử</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Sáng tạo nội dung</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-book" aria-hidden="true"></i>Đào tạo</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Về chúng tôi
                   <i class="fa fa-angle-down" aria-hidden="true"></i>
                   <i class="fa fa-angle-up disabled" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="fa fa-grav" aria-hidden="true"></i>Về Ai Studio</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i>Chương trình Affliate</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Blog</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-address-book-o" aria-hidden="true"></i>Liên hệ</a>
                  </div>
                </li>
                      <li class="nav-item">
                  <a class="nav-link" href="#">Bảng giá</a>
                </li>
                      <li class="nav-item">
                  <a class="nav-link" href="#">API</a>
                </li>
               
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
              <div class="item"><img src="<?php echo $theme_uri; ?>/images/s1.png"  alt=""></div>
              <div class="item"><img src="<?php echo $theme_uri; ?>/images/s2.png"  alt=""></div>
              <div class="item"><img src="<?php echo $theme_uri; ?>/images/s3.png"  alt=""></div>
              <div class="item"><img src="<?php echo $theme_uri; ?>/images/s4.png"  alt=""></div>
              <div class="item"><img src="<?php echo $theme_uri; ?>/images/s5.png"  alt=""></div>
            </div>
          </div>
        </div>
    </div>
    