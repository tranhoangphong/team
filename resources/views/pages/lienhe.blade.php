@extends('layouts.index')
@section('content')
<section id="contact">
    <div class="container mt-3">
        <div class="row ">
            <div class="col-6">
                 <h4 class="color-4054b2 title-4054b2 text-center">
                        LIÊN HỆ VỚI CHÚNG TÔI TẠI:
                </h4>
                <div class="forms-contact" style="margin-top: 30px;">
                        <form>
                                <div class="form-group">
                                  <label for="" class="color-4054b2">Tên Của bạn:</label>
                                  <input type="name" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                        <label for="" class="color-4054b2">Email của bạn:</label>
                                        <input type="email" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                        <label for="" class="color-4054b2">Số điện thoại của bạn:</label>
                                        <input type="number" class="form-control" id="" placeholder="">
                                </div>
                                <!-- <div class="form-group">
                                  <label for="exampleFormControlSelect1">Example select</label>
                                  <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div> 
                                <div class="form-group">
                                  <label for="exampleFormControlSelect2"></label>
                                  <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>-->
                                <div class="form-group">
                                  <label for="" class="color-4054b2">Tin nhắn yêu cầu</label>
                                  <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                               <center> <button type="submit" class="form-control button-contact">Gửi yêu cầu</button></center>
                              </form>
                </div>
            </div>
            <div class="col-6" style="background-color: #4054b2;">
                <center>                       
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2668295177214!2d106.67997221411657!3d10.790863961879413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528d35939c66f%3A0xe52e3ed732b15272!2sFPT%20Polytechnic%20HCM!5e0!3m2!1sen!2s!4v1576330509558!5m2!1sen!2s" width="100%" height="400px" frameborder="0" style="border:0;margin-top: 30px;" allowfullscreen=""></iframe>
                </center>
                <p style="color: white;">
                        <i class="fas fa-location-arrow"></i> 123 - ABC - QH - HCM <br>
                        <i class="fas fa-phone"></i> 123 456 789
                </p>
            </div>
        </div>
    </div>
</section>

@endsection