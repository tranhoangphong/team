@extends('layouts.index')
@section('content')
<section>
    <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                        <h5 class="color-4054b2 title-4054b2 text-center">LỰA CHỌN MẪU XE VÀ PHỤ KIỆN ĐI KÈM
                        </h5>
                        <hr class="hr-4054b2-3 text-center">
                        <br>
                        <p style="color: black;">Nhận báo giá xe mới nhất , cùng nhiều chương trình khuyến mãi. <br>

                                Các hãng xe: Honda, Toyota, Mercerdes, BMW,..</p>
                </div>
            </div>
    </div>
</section>
<section>
  <div class="container mb-5" class="tab-pane" id="chr" role="tabpanel" aria-labelledby="chr-tab">
      <div class="row">
          <div class="col-lg-8">
                 <div class="tab-content">
                  <div class="tab-pane active" id="white" role="tabpanel" aria-labelledby="white-tab"> <center><div class="spritespin"></div></center>
                  <script>
                    $(function() {
                   $('.spritespin').spritespin({
                     source: SpriteSpin.sourceArray('images/chr/{frame}.png', { frame: [1,36], digits: 3 }),
                   width: 800,
                   height: 400,
                   sense: 1,
                   animate: false,
                 });
               })
                 </script></div>
                  <div class="tab-pane" id="black" role="tabpanel" aria-labelledby="black-tab">..s.</div>
                  <div class="tab-pane" id="blue" role="tabpanel" aria-labelledby="blue-tab">.a..</div>
                  <div class="tab-pane" id="red" role="tabpanel" aria-labelledby="red-tab">..e.</div>
                  <div class="tab-pane" id="Michelin" role="tabpanel" aria-labelledby="Michelin-tab">.aMichelin..</div>
                  <div class="tab-pane" id="Pirelli" role="tabpanel" aria-labelledby="Pirelli-tab">..Pirelli.</div>
                </div>
          </div>
          <div class="col-lg-4 scroll-detail mt-5">
              <!-- <div class="progress-bar" id="myBar"></div>
              <script>
                  // When the user scrolls the page, execute myFunction 
                  window.onscroll = function() {myFunction()};
                  
                  function myFunction() {
                    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                    var scrolled = (winScroll / height) * 100;
                    document.getElementById("myBar").style.width = scrolled + "%";
                  }
                  </script> -->
              <div class="pos-f-t">
                  <nav class="navbar navbar-dark bg-4054b2-2" style="height: 40px;border-radius: 5px;">
                      <h5 class="color-white">MÀU XE</h5>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span><i class="fas fa-plus-circle icon-add" aria-hidden="true"></i></span>              
                      </button>
                  </nav>
                  <div class="collapse" id="navbarToggleExternalContent">
                      <div class="bg-white p-4">
                          <div class="nav flex-column nav-pills" id="myTabb" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="white-tab" data-toggle="tab" href="#white" role="tab" aria-controls="white" aria-selected="true">Trắng</a>
                              <a class="nav-link" id="black-tab" data-toggle="tab" href="#black" role="tab" aria-controls="black" aria-selected="false">Đen</a>
                              <a class="nav-link" id="blue-tab" data-toggle="tab" href="#blue" role="tab" aria-controls="blue" aria-selected="false">Xanh dương</a>
                              <a class="nav-link" id="red-tab" data-toggle="tab" href="#red" role="tab" aria-controls="red" aria-selected="false">Đỏ</a>
                          </div>        
                      </div>
                    </div>
                </div>
                <div class="pos-f-t mt-1">
                  <nav class="navbar navbar-dark bg-4054b2-2 " style="height: 40px;border-radius: 5px;">
                      <h5 class="color-white">LỐP XE</h5>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span><i class="fas fa-plus-circle icon-add" aria-hidden="true"></i></span>                          
                      </button>               
                  </nav>
                  <div class="collapse" id="navbarToggleExternalContent1">
                      <div class="bg-white p-4">
                          <div class="nav flex-column nav-pills" id="myTabb" role="tablist" aria-orientation="vertical">
                              <a class="nav-link" id="Michelin-tab" data-toggle="tab" href="#Michelin" role="tab" aria-controls="Michelin" aria-selected="true">Michelin</a>
                              <a class="nav-link" id="Pirelli-tab" data-toggle="tab" href="#Pirelli" role="tab" aria-controls="Pirelli" aria-selected="false">Pirelli</a>
                          </div>                 
                      </div>
                    </div>
                </div>
                <div class="pos-f-t mt-1">
                  <nav class="navbar navbar-dark bg-4054b2-2" style="height: 40px;border-radius: 5px;">
                      <h5 class="color-white">ĐỘNG CƠ</h5>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span><i class="fas fa-plus-circle icon-add" aria-hidden="true"></i></span>                         
                      </button>                
                  </nav>
                  <div class="collapse" id="navbarToggleExternalContent2">
                      <div class="bg-white p-4">
                          <div class="nav flex-column nav-pills" id="myTabb" role="tablist" aria-orientation="vertical">
                              <a class="nav-link " id="white-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                              <a class="nav-link" id="blue-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                              <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
                              <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                          </div>                  
                      </div>
                    </div>
                </div>
                <div class="pos-f-t mt-1">
                  <nav class="navbar navbar-dark bg-4054b2-2" style="height: 40px;border-radius: 5px;">
                      <h5 class="color-white">NỘI THẤT</h5>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent3" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span><i class="fas fa-plus-circle icon-add" aria-hidden="true"></i></span>                          </button>
                  </nav>
                  <div class="collapse" id="navbarToggleExternalContent3">
                      <div class="bg-white p-4">
                          <div class="nav flex-column nav-pills" id="myTabb" role="tablist" aria-orientation="vertical">
                              <a class="nav-link " id="white-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                              <a class="nav-link" id="blue-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                              <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
                              <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                          </div>     
                      </div>
                    </div>
                </div>
                <div class="pos-f-t mt-1">
                  <nav class="navbar navbar-dark bg-4054b2-2" style="height: 40px;border-radius: 5px;">
                      <h5 class="color-white">NGOẠI THẤT</h5>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent4" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span><i class="fas fa-plus-circle icon-add" aria-hidden="true"></i></span>                         
                      </button>                
                  </nav>
                  <div class="collapse" id="navbarToggleExternalContent4">
                      <div class="bg-white p-4">
                          <div class="nav flex-column nav-pills" id="myTabb" role="tablist" aria-orientation="vertical">
                              <a class="nav-link " id="white-tab"  data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                              <a class="nav-link" id="blue-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                              <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
                              <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                          </div>                  
                      </div>
                    </div>
                </div>
          </div>
      </div>
  </div>
  
</section>
<section>
    <div class="container">
            <div class="row" id="category">
                <div class="col-12 bg-gradient-4054b2">
                        <h5 class=" title-4054b2" style="color: white;">
                            TOYOTA
                        </h5>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <div  style="border: 1px solid  hsl(0, 1%, 30%);">
                            <img src="images/1.png" alt="" width="100%">
                            <h5 class="color-4054b2 title-4054b2 text-center">
                                    TOYOTA INNOVA 2019
                                </h5>
                            <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">Phiên bản:</th>
                                        <th scope="col">Nâu</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Giá:</td>
                                        <td>771 triệu</td>
                                      </tr>
                                      <tr>
                                        <td>Giá khuyến mãi:</td>
                                        <td>Đang cập nhật</td>
                                      </tr>
                                      <tr>
                                          <td colspan="2"><center><button class="button-detail" id="chr-tab" data-toggle="tab" href="#chr" role="tab" aria-controls="chr" aria-selected="true">Xem chi tiết</button></center></td>
                                      </tr>
                                    </tbody>
                            </table>
                            
                    </div>
                </div>
                <div class="col-4" >
                       <div style="border: 1px solid   hsl(0, 1%, 30%);">
                            <img src="images/2.png" alt="" width="100%">
                        <h5 class="color-4054b2 title-4054b2 text-center">
                                TOYOTA RUSH 2019
                            </h5>
                        <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Phiên bản:</th>
                                    <th scope="col">Trắng</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Giá:</td>
                                    <td>668 triệu</td>
                                  </tr>
                                  <tr>
                                    <td>Giá khuyến mãi:</td>
                                    <td>Đang cập nhật</td>
                                  </tr>
                                  <tr>
                                      <td colspan="2"><center><button class="button-detail">Xem chi tiết</button></center></td>
                                  </tr>
                                </tbody>
                        </table>
                       </div>
                </div>
                <div class="col-4" >
                    <div style="border: 1px solid hsl(0, 1%, 30%);">
                            <img src="images/3.png" alt="" width="100%">
                            <h5 class="color-4054b2 title-4054b2 text-center">
                                    TOYOTA HILUX 2019
                                </h5>
                            <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">Phiên bản:</th>
                                        <th scope="col">Xám</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Giá:</td>
                                        <td>622 triệu</td>
                                      </tr>
                                      <tr>
                                        <td>Giá khuyến mãi:</td>
                                        <td>Đang cập nhật</td>
                                      </tr>
                                      <tr>
                                          <td colspan="2"><center><button class="button-detail">Xem chi tiết</button></center></td>
                                      </tr>
                                    </tbody>
                            </table>
                    </div>
                </div>
            </div>
    </div>
</section>
@endsection