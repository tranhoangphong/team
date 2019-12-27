@extends('layouts.index')
@section('content')

<section id="login" class="pt-5">
    <div class="container">
       <div class="row justify-content-md-center  m-auto" style="background-image: url(images/chr1.png);background-repeat: no-repeat;">
            <div class="col-7 pt-4" style="background-color: #0c36f39a;">
        <h1 class="text-login text-center">
                CHÀO MỪNG BẠN ĐẾN VỚI
        </h1>
        <center>          
              <img src="images/Vcar-1.png" alt="" height="100px" width="300px">
        </center>
        </div>
        <div class="col-4" style="background-color: white;">
                <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên đăng nhập hoặc email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <small id="emailHelp" class="form-text text-muted">Không nên chia sẻ tài khoản với bất kì ai khác.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mật Khẩu</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary">ĐĂNG NHẬP</button>
                            <button type="submit" class="btn btn-secondary" onclick="window.location.href = '{{ url('pages/register') }}';">ĐĂNG KÝ</button> 
                        </center>
                        <br>
                        <center><a href="">Quên mật khẩu?</a></center>
                      </form>
        </div>
       </div>
    </div>
</section>
@endsection