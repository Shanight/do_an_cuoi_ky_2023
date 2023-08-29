<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    /> -->
  <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      /> -->
  <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"
    /> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
  <link rel="stylesheet" href="css/owl.theme.green.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <script src="js/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <link rel="shortcut icon" href="hinh/logo.jpg" type="image/x-icon" />
  <title>Truyện Tranh Online</title>
  <style>
    .col {
      bottom: 5px;
      padding: 20px;
    }

    .left-column {
      width: 70%;
      background: #ffffff;
      float: left;

    }

    .right-column {
      width: 30%;
      background: #ffffff;
      float: right;
    }
  </style>
</head>

<body>
  <div id="header">
    <a href="" id="logo">
      <img src="hinh/logo.jpg" alt="logo" />
    </a>
    <nav>
      <ul id="main-menu">
        <li>
          <a class="active" href="/"><i class="fa fa-fw fa-home"></i> Trang Chủ
          </a>
        </li>
        <li>
          <a class="active" href="#"> Danh Sách Truyện </a>
          <ul class="sub-menu">
            <li><a href="#">Cổ Đại</a></li>
            <li><a href="#">Hiện Đại</a></li>
            <li><a href="#">Ngôn Tình</a></li>
            <li><a href="#">Manhua</a></li>
            <li><a href="#">Truyện Màu</a></li>
            <li><a href="#">Manga</a></li>
          </ul>
        </li>
        <li><a class="active" href="#"> Theo Dõi </a></li>
        <li>
          <a class="active" href="lienhe.html"><i class="fas fa-edit"></i> Liên Hệ
          </a>
        </li>
      </ul>
    </nav>
    <div class="info">
      <li>
        <a class="active" href="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-fw fa-search"></i> Tìm
          Kiếm
        </a>
      </li>
      <li>
        <a class="active" href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-fw fa-user"></i> Đăng
          Nhập/Đăng Ký
        </a>
      </li>
      <!-- <li><a class="active" href="#" data-toggle="modal" data-target="#registerModal"><i class="fa fa-fw fa-user"></i> Đăng Ký</a></li> -->
    </div>
  </div>

  <div id="main">
    <div class="slider-box owl-carousel">

      <div class="card">
        <div class="header">
          <div class="profile-pic" style="
                background-image: url('hinh/hinh1.jpg');
              "></div>
        </div>
        <div class="details">
          <p style="text-align: center;">ĐỨNG YÊN ! EM GÁI CHÚNG TÔI NÓI TRÊN ĐẦU BẠN CÓ QUỶ</p>
          <p class="profession">Chương 1</p>
        </div>
      </div>

      <div class="card">
        <div class="header">
          <div class="profile-pic" style="
                background-image: url('hinh/hinh2.jpg');
              "></div>
        </div>

        <div class="details">
          <p style="text-align: center;">KIỀU TỔNG , BÀ XÃ BỊ ANH NUÔNG CHIỀU ĐẾN HƯ RỒI</p>
          <p class="profession">Chương 1</p>
        </div>
      </div>

      <div class="card">
        <div class="header">
          <div class="profile-pic" style="
                background-image: url('hinh/hinh3.jpg');
              "></div>
        </div>

        <div class="details">
          <p style="text-align: center;">SAU KHI KHÔNG NGỪNG CHẾT , TA TRỞ THÀNH ĐẾ TÔN VẠN NGƯỜI MÊ</p>
          <p class="profession">Chương 1</p>
        </div>
      </div>

      <div class="card">
        <div class="header">
          <div class="profile-pic" style="
                background-image: url('hinh/hinh4.jpg');
              "></div>
        </div>

        <div class="details">
          <p style="text-align: center;">LÃO ĐẠI XUYÊN KHÔNG GẢ CHO PHU QUÂN MÙ</p>
          <p class="profession">Chương 1</p>
        </div>
      </div>

      <div class="card">
        <div class="header">
          <div class="profile-pic" style="
                background-image: url('hinh/hinh5.jpg');
              "></div>
        </div>

        <div class="details">
          <p style="text-align: center;">SAU KHI SỐNG LẠI TA TRỞ THÀNH TIỂU KIỀU THÊ CỦA QUYỀN THẦN</p>
          <p class="profession">Chương 1</p>
        </div>
      </div>

      <div class="card">
        <div class="header">
          <div class="profile-pic" style="
                background-image: url('hinh/hinh6.jpg');
              "></div>
        </div>
        <div class="details">
          <p style="text-align: center;">CHÀO MỪNG CẬU ĐẾN TRƯỜNG MA GIỚI ! IRUMA-KUN</p>
          <p class="profession">Chương 1</p>
        </div>
      </div>

      <div class="card">
        <div class="header">
          <div class="profile-pic" style="
                background-image: url('hinh/hinh7.jpg');
              "></div>
        </div>
        <div class="details">
          <p style="text-align: center;">BÉ RỒNG ĐỘT KÍCH :MAMI VỪA TÀN NHẪN VỪA CAY ĐỘC</p>
          <p class="profession">Chương 1</p>
        </div>
      </div>

      <div class="card">
        <div class="header">
          <div class="profile-pic" style="
                background-image: url('hinh/hinh8.jpg');
              "></div>
        </div>
        <div class="details">
          <p style="text-align: center;">TIỂU SƯ MUỘI RÕ RÀNG SIÊU CƯỜNG , NHƯNG LẠI QUÁ TẤU HỀ</p>
          <p class="profession">Chương 1</p>
        </div>
      </div>

    </div>

    <div class="section" style="display: block;">
      <div class="col p-5" style="margin-top: 5px ;">
        <div class="left-column p-5">
          <h5 style="color: lightskyblue; ">TRUYỆN TRANH MỚI CẬP NHẬT</h5>
          <hr width="90%" size="20px" align="left;" color="lightskyblue" />

          <div class="card1">
            <div class="header1">
              <div class="profile-pic1" style="
                background-image: url('hinh/hinh1.jpg');
              "></div>
            </div>
            <div class="details1">
              <p style="text-align: center; color: rgb(8, 155, 204);">ĐỨNG YÊN ! EM GÁI CHÚNG TÔI NÓI TRÊN ĐẦU BẠN CÓ
                QUỶ
              </p>
              <p class="profession1" style="color: lightskyblue; ">Chương 1 <i class="fa-regular fa-clock"></i> 5 giờ
              </p>
              <p style="color: lightskyblue; ">9/10</p>
            </div>
          </div>


          <div class="card1">
            <div class="header1">
              <div class="profile-pic1" style="
                background-image: url('hinh/hinh2.jpg');
              "></div>
            </div>
            <div class="details1">
              <p style="text-align: center; color: rgb(8, 155, 204);">KIỀU TỔNG, BÀ XÃ BỊ ANH NUÔNG CHIỀU ĐẾN HƯ RỒI
                SAO
              </p>
              <p class="profession1" style="color: lightskyblue; ">Chương 1 <i class="fa-regular fa-clock"></i> 5 giờ
              </p>
              <p style="color: lightskyblue; ">9/10</p>
            </div>
          </div>

          <div class="card1">
            <div class="header1">
              <div class="profile-pic1" style="
                background-image: url('hinh/hinh3.jpg');
              "></div>
            </div>
            <div class="details1">
              <p style="text-align: center; color: rgb(8, 155, 204);">SAU KHI KHÔNG NGỪNG CHẾT, TA TRỞ THÀNH ĐẾ TÔN
                VẠN
                NGƯỜI MÊ
              </p>
              <p class="profession1" style="color: lightskyblue; ">Chương 1 <i class="fa-regular fa-clock"></i> 5 giờ
              </p>
              <p style="color: lightskyblue; ">9/10</p>
            </div>
          </div>

          <div class="card1">
            <div class="header1">
              <div class="profile-pic1" style="
                background-image: url('hinh/hinh4.jpg');
              "></div>
            </div>
            <div class="details1">
              <p style="text-align: center; color: rgb(8, 155, 204);">LÃO ĐẠI XUYÊN KHÔNG GẢ CHO PHU QUÂN MÙ
              </p>
              <p class="profession1" style="color: lightskyblue; ">Chương 1 <i class="fa-regular fa-clock"></i> 5 giờ
              </p>
              <p style="color: lightskyblue; ">9/10</p>
            </div>
          </div>

          <div class="card1">
            <div class="header1">
              <div class="profile-pic1" style="
                background-image: url('hinh/hinh5.jpg');
              "></div>
            </div>
            <div class="details1">
              <p style="text-align: center; color: rgb(8, 155, 204);">SAU KHI SỐNG LẠI TA TRỞ THÀNH TIỂU KIỀU THÊ CỦA
                QUYỀN THẦN
              </p>
              <p class="profession1" style="color: lightskyblue; ">Chương 1 <i class="fa-regular fa-clock"></i> 5 giờ
              </p>
              <p style="color: lightskyblue; ">9/10</p>
            </div>
          </div>

          <div class="card1">
            <div class="header1">
              <div class="profile-pic1" style="
                background-image: url('hinh/hinh6.jpg');
              "></div>
            </div>
            <div class="details1">
              <p style="text-align: center; color: rgb(8, 155, 204);">CHÀO MỪNG CẬU ĐẾN VỚI TRƯỜNG MA GIỚI ! IRUMA-KUN
              </p>
              <p class="profession1" style="color: lightskyblue; ">Chương 1 <i class="fa-regular fa-clock"></i> 5 giờ
              </p>
              <p style="color: lightskyblue; ">9/10</p>
            </div>
          </div>

          <div class="card1">
            <div class="header1">
              <div class="profile-pic1" style="
                background-image: url('hinh/hinh7.jpg');
              "></div>
            </div>
            <div class="details1">
              <p style="text-align: center; color: rgb(8, 155, 204);"> BÉ RỒNG ĐỘT KÍCH :MAMI VỪA TÀN NHẪN VỪA CAY ĐỘC
              </p>
              <p class="profession1" style="color: lightskyblue; ">Chương 1 <i class="fa-regular fa-clock"></i> 5 giờ
              </p>
              <p style="color: lightskyblue; ">9/10</p>
            </div>
          </div>

          <div class="card1">
            <div class="header1">
              <div class="profile-pic1" style="
                background-image: url('hinh/hinh8.jpg');
              "></div>
            </div>
            <div class="details1">
              <p style="text-align: center; color: rgb(8, 155, 204);">TẤT CẢ PHẢN DIỆN ĐỀU HẮC HOÁ , CHỈ MỖI SƯ MUỘI
                LÀ
                HÀI HƯỚC
              </p>
              <p class="profession1" style="color: lightskyblue; ">Chương 1 <i class="fa-regular fa-clock"></i> 5 giờ
              </p>
              <p style="color: lightskyblue; ">9/10</p>
            </div>
          </div>

        </div>

        <div class="right-column">
          <h5 style="color: lightskyblue;">TỔNG HỢP <i class="fa-solid fa-tag"></i></h5>
          <hr width="90%" size="20px" align="left" color="lightskyblue" />

          <p style="color:lightskyblue; padding-top:5px ; text-align: left;">CÁC THỂ LOẠI</p>
          <p style="color:white; font-size:12px; line-height:3;">
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Xuyên Không
            </span>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Cổ Đại
            </span>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Hiện Đại
            </span>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Ngôn Tình
            </span></br>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Huyền Ảo
            </span>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Trùng Sinh
            </span>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Manga </span>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Ngược Luyến
            </span></br>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Vườn Trường
            </span>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Thế Thân
            </span>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Hệ Thống
            </span>
            <span style="background-color:lightskyblue; padding:10px; border-radius: 5px; margin: 2px;"> Ngọt Sủng
            </span>
          </p>


          <h5 style="color: lightskyblue;">BẢNG XẾP HẠNG <i class="fa-solid fa-ranking-star"></i></h5>
          <hr width="90%" size="20px" align="left" color="lightskyblue" />
          <!--
          </div>
          <b
            style="font-size: 13px; color: lightskyblue; float:right; text-align: center; font-family: 'Times New Roman', Times, serif;">
            ĐỨNG YÊN ! EM GÁI CHÚNG TÔI NÓI TRÊN ĐẦU BẠN CÓ QUỶ </b>
          <p style="color: lightskyblue; font-size: 13px;"><i class="fa-solid fa-eye" style="padding: 10px; "></i> 5,5K
            Lượt Xem</p>
  
          <div class="circleexam1">
  
          </div>
          <b
            style="font-size: 13px; color: lightskyblue; float:right; text-align: center; font-family: 'Times New Roman', Times, serif; ">
            KIỀU TỔNG, BÀ XÃ BỊ ANH NUÔNG CHIỀU ĐẾN HƯ RỒI SAO !</b>
          <p style="color: lightskyblue; font-size: 13px;"><i class="fa-solid fa-eye" style="padding: 10px;  "></i> 5K
            Lượt Xem</p>
  
          <div class="circleexam2">
  
          </div>
          <b
            style="font-size: 13px; color: lightskyblue; float:right; text-align: center; font-family: 'Times New Roman', Times, serif;">
            SAU KHI KHÔNG NGỪNG CHẾT, TA TRỞ THÀNH ĐẾ TÔN VẠ...</b>
          <p style="color: lightskyblue; font-size: 13px;"><i class="fa-solid fa-eye" style="padding: 10px;  "></i> 4,5K
            Lượt Xem</p>
  
          <div class="circleexam3">
  
          </div>
          <b
            style="font-size: 13px; color: lightskyblue; float:right; text-align: center; font-family: 'Times New Roman', Times, serif;">
            LÃO ĐẠI XUYÊN KHÔNG GẢ CHO PHU QUÂN MÙ</b>
          <p style="color: lightskyblue; font-size: 13px;"><i class="fa-solid fa-eye" style="padding: 12px;  "></i> 4K
            Lượt Xem</p>
  
          <div class="circleexam4">
  
          </div>
          <b
            style="font-size: 13px; color: lightskyblue; float:right; text-align: center;font-family: 'Times New Roman', Times, serif;">
            TẤT CẢ PHẢN DIỆN ĐỀU HẮC HOÁ , CHỈ MỖI SƯ MUỘI LÀ .... </b>
          <p style="color: lightskyblue; font-size: 13px;"><i class="fa-solid fa-eye" style="padding: 10px;  "></i> 3K
            Lượt Xem</p>
            -->

          <div class="container" style="color: lightskyblue;">
            <div class="row">

              <div class="media">
                <div class="media-left">
                  <img src="./hinh/hinh1.jpg" style="width:40px; height:40px; border-radius: 50%; margin-right: 14px;">
                </div>
                <div class="media-body">
                  <h6 class="media-heading title">ĐỨNG YÊN ! EM GÁI CHÚNG TÔI NÓI TRÊN ĐẦU BẠN CÓ QUỶ</h6>
                  <p style="color: lightskyblue; font-size: 13px;">
                    <i class="fa-solid fa-eye"></i> 4K Lượt Xem
                  </p>
                </div>
              </div>

              <div class="media">
                <div class="media-left">
                  <img src="./hinh/hinh2.jpg" style="width:40px; height:40px; border-radius: 50%; margin-right: 14px;">
                </div>
                <div class="media-body">
                  <h6 class="media-heading title">KIỀU TỔNG, BÀ XÃ BỊ ANH NUÔNG CHIỀU ĐẾN HƯ RỒI SAO</h6>
                  <p style="color: lightskyblue; font-size: 13px;">
                    <i class="fa-solid fa-eye"></i> 4K Lượt Xem
                  </p>
                </div>
              </div>

              <div class="media">
                <div class="media-left">
                  <img src="./hinh/hinh3.jpg" style="width:40px; height:40px; border-radius: 50%; margin-right: 14px;">
                </div>
                <div class="media-body">
                  <h6 class="media-heading title">SAU KHI KHÔNG NGỪNG CHẾT, TA TRỞ THÀNH ĐẾ TÔN VẠN NGƯỜI MÊ</h6>
                  <p style="color: lightskyblue; font-size: 13px;">
                    <i class="fa-solid fa-eye"></i> 4K Lượt Xem
                  </p>
                </div>
              </div>

              <div class="media">
                <div class="media-left">
                  <img src="./hinh/hinh4.jpg" style="width:40px; height:40px; border-radius: 50%; margin-right: 14px;">
                </div>
                <div class="media-body">
                  <h6 class="media-heading title">LÃO ĐẠI XUYÊN KHÔNG GẢ CHO PHU QUÂN MÙ</h6>
                  <p style="color: lightskyblue; font-size: 13px;">
                    <i class="fa-solid fa-eye"></i> 4K Lượt Xem
                  </p>
                </div>
              </div>
            </div>
          </div>



          <h5 style="color: lightskyblue;"> MẠNG XÃ HỘI FACEBOOK <i class="fa-regular fa-thumbs-up"></i></h5>
          <hr width="90%" size="20px" align="left;" color="lightskyblue" />




          <iframe
            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthuyphuong1.xyz&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
            width="340" height="300" style="border:none; overflow:hidden; border-radius: 5px;" scrolling="no"
            frameborder="0" allowfullscreen="true"
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
          </iframe>


        </div>
      </div>
    </div>

  </div>







  <!--ĐĂNG KÝ, ĐĂNG NHẬP-->
  <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="searchModalLabel">Tìm truyện</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="search" placeholder="Tìm kiếm tại đây..." />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Đóng
          </button>
          <button type="button" class="btn btn-success">Tìm</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Đăng Nhập</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="username">Tên đăng nhập</label>
              <input type="text" class="form-control" id="username" placeholder="Tên đăng nhập" />
            </div>
            <div class="form-group">
              <label for="password">Mật khẩu</label>
              <input type="password" class="form-control" id="password" placeholder="Mật khẩu" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Đóng
          </button>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#registerModal">
            Đăng Ký
          </button>
          <button type="button" class="btn btn-primary">Đăng Nhập</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Đăng Ký</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="register-username">Tên đăng nhập</label>
              <input type="text" class="form-control" id="register-username" placeholder="Tên đăng nhập" />
            </div>
            <div class="form-group">
              <label for="register-email">Email</label>
              <input type="email" class="form-control" id="register-email" placeholder="Email" />
            </div>
            <div class="form-group">
              <label for="register-fullname">Họ và tên</label>
              <input type="text" class="form-control" id="register-fullname" placeholder="Họ và tên" />
            </div>
            <div class="form-group">
              <label for="register-password">Mật khẩu</label>
              <input type="password" class="form-control" id="register-password" placeholder="Mật khẩu" />
            </div>
            <div class="form-group">
              <label for="register-confirm-password">Xác nhận mật khẩu</label>
              <input type="password" class="form-control" id="register-confirm-password"
                placeholder="Xác nhận mật khẩu" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Đóng
          </button>
          <button type="button" class="btn btn-primary">Đăng Ký</button>
        </div>
      </div>
    </div>
  </div>
  <!--LINK JS-->
  <script src="js/script.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <div id="fb-root"></div>
  <script>(function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=xxx";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0"
    nonce="dyUC7JPv"></script>


  <!--FOOTER-->
  <footer id="footer">
    <div>COPYRIGHT &copy; 2023 Design by TRƯƠNG THUÝ PHƯƠNG</div>


  </footer>
</body>

</html>