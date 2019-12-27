
<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ asset('') }}" />
    <link rel="icon" type="image/png" href="images/Vcar-icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>vcar</title>
</head>
<body>
  <!-- Menu -->
    <header>
       <div class="container-fluid" style="position: fixed;top: 0;z-index: 9999; background-color: #4054b2;">
        <div class="row">
           <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="mr-auto col-3">
                 <a class="navbar-brand mb-2" href="#"><img src="images/Vcar.png" ></a>
                </div>
                <button class="navbar-toggler boder-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                 <div class="collapse navbar-collapse " id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto ">
                     <li class="nav-item">
                       <a class="nav-link active" href="{{ url('pages/index') }}">TRANG CHỦ <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="{{ url('pages/mauxe') }}">MẪU XE</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('pages/phukien') }}">PHỤ KIỆN</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('pages/tintuc') }}">TIN TỨC</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('pages/lienhe') }}">LIÊN HỆ</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('pages/login') }}">ĐĂNG NHẬP</a>
                     </li>
                     <!-- <li class="nav-item">
                       <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                     </li> -->
                   </ul>
                   <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm..." aria-label="Search">
                     <button class="btn bg-4054b2 my-2 my-sm-0" type="submit">Tìm kiếm</button>
                   </form>
                 </div>
            </nav>
           </div>
        </div>
       </div>
    </header>