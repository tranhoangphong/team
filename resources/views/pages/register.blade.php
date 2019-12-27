@extends('layouts.index')
@section('content')
<section>
    <div class="container" style="margin-top: 20px;">
           <div class="row m-auto justify-content-md-center mt-5" style=" background-image: url(images/chr3.png);background-repeat: no-repeat;background-position: center;">
               <div class="col-6 shadow mt-5" style="background-color: rgba(255, 255, 255, 0.692);">
               <h5 class="color-4054b2 text-center mt-3"><b>BẠN CÓ THỂ ĐĂNG KÝ TÀI KHOẢN TẠI ĐÂY THEO CÁC TRƯỜNG QUY ĐỊNH!</b></h5>
                        <form>
                                <div class="form-group">
                                  <label for="" class="color-4054b2 mt-2">Tên Của bạn:</label>
                                  <input type="name" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                        <label for="" class="color-4054b2">Họ Của bạn:</label>
                                        <input type="firstname" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                        <label for="" class="color-4054b2">Email của bạn:</label>
                                        <input type="email" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                        <label for="" class="color-4054b2">Số điện thoại của bạn:</label>
                                        <input type="number" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                        <label for="" class="color-4054b2">Mật khẩu:</label>
                                        <input type="password" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                        <label for="" class="color-4054b2">Nhập lại mật khẩu:</label>
                                        <input type="password" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Vui lòng xác nhận rằng bạn đồng ý với chính sách bảo mật của chúng tôi</label>
                                </div>
                               <center> <button type="submit" class="form-control button-contact">ĐĂNG KÝ</button></center>
                        </form>
                   </center>
               </div>
           </div>
    </div>
</section>

@endsection