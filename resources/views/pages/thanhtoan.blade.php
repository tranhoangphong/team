@extends('layouts.index')
@section('content')
<section>
    <div class="container mt-5">
       <div class="row mt-5">
           <div class="col-lg-6 col-12 mt-5">
               <h5 class="color-4054b2"><b>Thông Tin Thanh Toán</b></h5>
               <br>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Họ và tên:</span>
                </div>
                <input type="text" aria-label="First name" class="form-control">
                <input type="text" aria-label="Last name" class="form-control">
              </div>
              <br>
           <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Địa chỉ:</span>
            </div>
            <input type="text" aria-label="" class="form-control">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Thành Phố:</span>
            </div>
            <input type="text" aria-label="" class="form-control">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Số điện thoại:</span>
            </div>
            <input type="number" aria-label="" class="form-control">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Ghi chú:</span>
            </div>
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
        </div>
           <div class="col-lg-6 col-12 mt-5">
               <h5 class="color-4054b2"><b>Đơn Hàng Của Bạn</b></h5>
               <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">Sản phẩm</th>
                    <th></th>
                    <th scope="col">Tổng</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                        Đồng hồ quay trục cơ Vios 2007-2013 MT (Đồng hồ táp lô Vios)</th>
                    <td> ×3</td>
                    <td>27.000.000₫</td>
                  </tr>
                  <tr>
                    <th scope="row">Lọc gió Land FZJ100 - FZJ105 cho xe toyota</th>
                    <td> ×2</td>
                    <td>27.000.000₫</td>
                  </tr>
                  <tr>
                    <th scope="row">Cổ hút Honda Civic 1.8 chính hãng </th>
                    <td> ×1</td>
                    <td colspan="2">9.750.000₫</td>
                  </tr>
                  <thead>
                    <tr>
                      <th scope="col">Tạm tính</th>
                      <th></th>
                      <th scope="col">63.750.000₫</th>
                    </tr>
                    <tr>
                        <th scope="col">Giao hàng</th>
                        <th></th>
                        <th scope="col">Free shipping</th>
                      </tr>
                      <tr>
                        <th scope="col">Tổng</th>
                        <th></th>
                        <th scope="col">	63.750.000₫</th>
                      </tr>
                  </thead>
                </tbody>
              </table>
              <div class="input-group">
                <input type="text" aria-label="" class="form-control" placeholder="Nhập mã giảm giá">
                <button class="button-detail ml-2">APLLY</button>
              </div>
              <hr>
              <p>Xin lỗi, có vẻ như không có phương thức thanh toán nào phù hợp với khu vực hiện tại của bạn. Vui lòng liên hệ với chúng tôi nếu bạn cần hỗ trợ hoặc muốn sắp xếp phương án thay thế.</p>
              <center><button class="button-detail" style="width: 100%;">Đặt Hàng</button>
              </center>
            </div>
       </div> 
    </div>
</section>

@endsection