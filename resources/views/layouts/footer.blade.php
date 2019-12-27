  <!-- Footer -->
  <footer>
    <div class="container mt-5">
        <div class="row">
          <div class="col-6 col-lg-4">
            <br>
            <h5 class="footer-title">Liên hệ</h5>
            <p class="footer-content">
              Địa chỉ: 123 Đường abc,P19,QCam,THHCM
              <br>
              Email: abc@gmail.com
              <br>
                Phone: 123 456 789
                <br>
                Fax: 7887878 785</p>
          </div>
          <div class="col-6 col-lg-4">
            <br>
            <h5 class="footer-title">Giờ làm việc
              </h5>
              <p class="footer-content">
                  T2-T6: 
                  Sáng: 8:00-11:30 <br>
                  Chiều: 13:00-17:30
                  <br> 
                  <br>
                  T7:
                  Sáng: 8:00-11:30
              </p>
          </div>
          <div class="col-12 col-lg-4 map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2668295177214!2d106.67997221411657!3d10.790863961879413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528d35939c66f%3A0xe52e3ed732b15272!2sFPT%20Polytechnic%20HCM!5e0!3m2!1sen!2s!4v1576330509558!5m2!1sen!2s" width="325" height="233" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
  </footer>
  <section id="footer">
    <div class="container">
        <div class="row">
          <div class="col-12">
            <br>
            <p class="footer-content">
              © All rights reserved by Vcar-Team
            </p>
          </div>
        </div>
    </div>
  </section>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-alt-circle-up"></i></button>
  <script>
    var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    function topFunction(e) {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
      e.preventDefault();
    }
    </script>
    
  <!-- Kết thúc Footer -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/spritespin@4.0.11/release/spritespin.js" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/408c7d7d0f.js" crossorigin="anonymous"></script>
  @yield('script')
</body>
</html>