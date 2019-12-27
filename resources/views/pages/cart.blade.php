@extends('layouts.index')
@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h5 class="color-4054b2 text-conter text-center mt-5"><b>GIỎ HÀNG CỦA BẠN</b></h5>
                <hr class="hr-4054b2-2">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Sản Phẩm</th>
                        <th scope="col"></th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tạm tính</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" style="width: 20%;"><img src="images/Sp/1.jpg" alt="" width="100%"></th>
                        <td>Đồng hồ quay trục cơ Vios 2007-2013 MT (Đồng hồ táp lô Vios)</td>
                        <td>9.000.000₫</td>
                        <td><i class="fa fa-minus"></i> 1 <i class="fa fa-plus"></i>
                        </td>
                        <td>9.000.000₫</td>
                        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
                      </tr>
                      <tr>
                        <th scope="row" style="width: 20%;"><img src="images/Sp/2.png" alt="" width="100%"></th>
                        <td>Ắc quy Hyundai County</td>
                        <td>23.000.000₫	</td>
                        <td> <i class="fa fa-minus"></i> 1 <i class="fa fa-plus"></i></td>
                        <td>23.000.000₫	</td>
                        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
                      </tr>
                      <tr>
                        <th scope="row" style="width: 20%;"><img src="images/Sp/3.jpg" alt="" width="100%"></th>
                        <td>Thân van hằng nhiệt Honda Civic</td>
                        <td>14.600.000₫</td>
                        <td> <i class="fa fa-minus"></i> 1 <i class="fa fa-plus"></i>
                        </td>
                        <td>14.600.000₫</td>
                        <td><i class="fa fa-times-circle" aria-hidden="true"></i></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="bg-4054b2-2 mb-4">
                        <i class="fa fa-bicycle ml-2"></i> Miễn phí giao hàng
                </div>
            </div>
            <div class="col-lg-3 bg-gray">
                <h5 class="color-4054b2 mt-2">Thanh toán</h5>
                <p>
                    Ước tính vận chuyển và thuế
                    <br>
                    Nhập điểm đến của bạn để có được một ước tính vận chuyển.
                </p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Quốc gia:</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Việt Nam</option>
                      <option value="1">Mỹ</option>
                      <option value="2">Anh</option>
                      <option value="3">Pháp</option>
                    </select>
                  </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Thành Phố:</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Hà Nội</option>
                      <option value="1">Hải Phòng</option>
                      <option value="2">Đà Nẵng</option>
                      <option value="3">TP. Hồ Chí Minh</option>
                    </select>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Mã bưu điện:</span>
                    </div>
                    <input type="text" aria-label="" class="form-control">
                </div>           
                              GIAO HÀNG TÍNH TOÁN
                    </h5>
                     <p>
                        Hướng dẫn đặc biệt cho người bán
                        <br>
                  </p>
                    <p> 
                        Thêm hướng dẫn đặc biệt cho đơn đặt hàng của bạn ...
                    </p>
                    <hr>
                    <h5><b>Tổng</b></h5>
                    <p>                        999.999 VNĐ
                    </p>
                    <center>                        <button class="bg-4054b2" style="padding-top:5px; padding-bottom: 5px;">THANH TOÁN ĐƠN HÀNG</button>
                    </center>
                </div>                      
            </div>
        </div>
    </div>
</section>

@endsection