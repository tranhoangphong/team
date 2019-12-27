@include('layouts.menuadmin')
@yield('contentadmin')
<div class="row box-shadow justify-content-md-center  m-auto" >
        <div class="col-4" style="background-color: white;">
          <form class="mt-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên đăng nhập hoặc email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mật Khẩu</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
           
                  <center>
                      <button type="submit" class="btn btn-primary">ĐĂNG NHẬP</button>
                  </center>
                  <br>
                  <center><a href="">Quên mật khẩu?</a></center>
                </form>
          </div>
</div>
@endsection