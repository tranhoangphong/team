@extends('layouts.index')
@section('content')
   <!-- danh muc -->
   <section >
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <ul class="list-group">
                    <li class="list-group-item"><a href="">NGOẠI THẤT</a></li>
                    <li class="list-group-item"><a href="">NỘI THẤT</a></li>
                    <li class="list-group-item"><a href="">TOYOTA</a></li>
                    <li class="list-group-item"><a href="">Mercerdes</a></li>
                    <li class="list-group-item"><a href="">BMW</a></li>
                    <li class="list-group-item"><a href="">HONDA</a></li>
                    <li class="list-group-item"><a href="">HYNDAI</a></li>
                    <li class="list-group-item"><a href="">VINFAST</a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-12">
                    <div id="carouselExampleControls" class="carousel slide mt-1" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="images/baner/hinh-slide-3911.jpg" class="d-block w-100" alt="..." width="100%" height="273px">
                              </div>
                              <div class="carousel-item">
                                <img src="images/baner/MEC-Banner.jpg" class="d-block w-100" alt="..." width="100%" height="273px">
                              </div>
                              <!-- <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                              </div> -->
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
            </div>
        </div>
    </div>
</section>
<!-- ket thuc danh muc -->

<!-- san pham -->
<section class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12" style="background-color: #e8e8e8;">
                    <h5 class="color-4054b2 title-4054b2 text-center">SẢN PHẨM ĐANG GIẢM GIÁ
                        </h5>
                        <hr class="hr-4054b2-2">
                        <br>
                    <div class="item">
                        <p class="item-title">Khung đồng hồ</p>
                        <img src="images/Sp/1.jpg" alt=""  width="100%">
                        <p class="item-content">Giảm giá trong:</p>
                        <p id="demo"></p>
                        <div></div>
                        <p class="item-price">Chỉ với 7.500.000đ</p>
                        <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm giỏ hàng</button></center>
                    <script>
                      var countDownDate = new Date("Jan 5, 2020 15:37:25").getTime();
                      
                      var x = setInterval(function() {
                        var now = new Date().getTime();
                            var distance = countDownDate - now; 
                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                           document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                        + minutes + "m " + seconds + "s ";
                        if (distance < 0) {
                          clearInterval(x);
                          document.getElementById("demo").innerHTML = "EXPIRED";
                        }
                      }, 1000);
                      </script>    
                    </div>
                    <div class="item">
                      <img src="images/baner/banner3.jpg" alt="" width="100%">
                    </div>
                    <!-- show sản phẩm danh mục giảm giá -->
                    <div class="item bg-white">
                      <img src="images/Sp/2.png" alt="" class="item-img">
                      <p class="item-title">Ắc quy Hyundai County</p>
                      <p class="item-price"><strike class="item-sale">25.000.000₫</strike> 23.000.000₫</p>
                      <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm giỏ hàng</button></center>
                    </div>
                    <div class="item bg-white">
                      <img src="images/Sp/3.jpg" alt="" class="item-img">
                      <p class="item-title">Thân van hằng nhiệt Honda Civic</p>
                      <p class="item-price"><strike class="item-sale">15.000.000₫</strike> 14.600.000₫</p>
                      <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm giỏ hàng</button></center>
                    </div>
                    <div class="item bg-white">
                      <img src="images/Sp/4.jpg" alt="" class="item-img">
                      <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                      <p class="item-price"><strike class="item-sale">10.000.000₫</strike> 9.750.000₫</p>
                      <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm giỏ hàng</button></center>
                    </div>
            </div>
            <div class="col-lg-9 col-12">
              <div class="row">
                <div class="col-4">
                  <div class="box">
                    <center><i class="fa fa-truck item-icon" aria-hidden="true"></i></center>
                    <h5 class="color-4054b2 text-center ml-2 mr-2"><b>GIAO HÀNG MỌI LÚC MỌI NƠI</b></h5>
                  </div>
                </div>
                <div class="col-4">
                  <div class="box">
                    <center><i class="fas fa-box-open  item-icon  "></i></center>
                    <h5 class="color-4054b2 text-center ml-2 mr-2"><b>HÀNG CHÍNH HÃNG</b></h5>
                    <br>
                  </div>
                </div>
                <div class="col-4">
                  <div class="box">
                    <center><i class="fas fa-headset  item-icon  "></i></center>
                    <h5 class="color-4054b2 text-center ml-2 mr-2"><b>HỖ TRỢ 24/7</b></h5>
                    <br>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h5 class="color-4054b2 title-4054b2">SẢN PHẨM MỚI
                  </h5>
                  <hr class="hr-4054b2-2">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-6">
                  <div class="item bg-white">
                    <img src="images/Sp/4.jpg" alt="" class="item-img">
                    <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                    <p class="item-price"> 9.750.000₫</p>
                    <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm giỏ hàng</button></center>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="item bg-white">
                    <img src="images/Sp/4.jpg" alt="" class="item-img">
                    <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                    <p class="item-price"> 9.750.000₫</p>
                    <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm giỏ hàng</button></center>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="item bg-white">
                    <img src="images/Sp/4.jpg" alt="" class="item-img">
                    <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                    <p class="item-price"> 9.750.000₫</p>
                    <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm giỏ hàng</button></center>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="item bg-white">
                      <img src="images/Sp/4.jpg" alt="" class="item-img">
                      <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                      <p class="item-price"> 9.750.000₫</p>
                      <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="item bg-white">
                    <img src="images/Sp/4.jpg" alt="" class="item-img">
                    <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                    <p class="item-price"> 9.750.000₫</p>
                    <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="item bg-white">
                  <img src="images/Sp/4.jpg" alt="" class="item-img">
                  <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                  <p class="item-price"> 9.750.000₫</p>
                  <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="item bg-white">
                <img src="images/Sp/4.jpg" alt="" class="item-img">
                <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                <p class="item-price"> 9.750.000₫</p>
                <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm
          </div>
        </div>
         <div class="col-lg-3 col-6">
                  <div class="item bg-white">
                      <img src="images/Sp/4.jpg" alt="" class="item-img">
                      <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                      <p class="item-price"> 9.750.000₫</p>
                      <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm
                </div>
              </div>
            </div>
            
            <center><button class="button-detail mt-5"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> XEM THÊM</button></center>
            <div class="row mt-5">
              <div class="col-lg-6 col-12">
                <img src="images/baner/banner-xe-hyundai-santafe-2019-1024x351.jpg" alt="" width="100%">
              </div>
              <div class="col-lg-6 col-12">
                <img src="images/baner/hyundai-santafe-2019-hoan-toan-moi-1024x351.jpg" alt="" width="100%">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 class="color-4054b2 title-4054b2">SẢN PHẨM HOT
                </h5>
                <hr class="hr-4054b2-2">
                <br>
              </div>
            </div>
              <div class="row">
                <div class="col-lg-3 col-6">
                  <div class="item bg-white">
                    <img src="images/Sp/4.jpg" alt="" class="item-img">
                    <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                    <p class="item-price"> 9.750.000₫</p>
                    <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm giỏ hàng</button></center>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="item bg-white">
                    <img src="images/Sp/4.jpg" alt="" class="item-img">
                    <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                    <p class="item-price"> 9.750.000₫</p>
                    <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm giỏ hàng</button></center>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="item bg-white">
                    <img src="images/Sp/4.jpg" alt="" class="item-img">
                    <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                    <p class="item-price"> 9.750.000₫</p>
                    <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêm giỏ hàng</button></center>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="item bg-white">
                      <img src="images/Sp/4.jpg" alt="" class="item-img">
                      <p class="item-title">Cổ hút Honda Civic 1.8 chính hãng</p>
                      <p class="item-price"> 9.750.000₫</p>
                      <center><button class="item-button"><i class="fa fa-cart-plus"></i> Thêmgiỏ hàng </button></center>
                </div>
              </div>
            </div>
            <center><button class="button-detail mt-4"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> XEM THÊM</button></center>
        </div>
    </div>
</section>
@endsection