
<footer>
  <div class="footer_container">
    <div class="footer-listing">
      <ul class="clearfix">
        <li>
          <a href="javascript:void(0)" class="accordion_head clearfix"><h4>Home</h4> <span><i class="fas fa-sort-down desk-none"></i></span></a>
          <div class="accordion_body">
            <p><a href="#">About Us</a></p>
            <p><a href="#">Contact Us</a></p>
            <p><a href="#">Partner with Us</a></p>
            <p><a href="#">Advertise with us</a></p>
            <p><a href="#">Testfunda Blog</a></p>
          </div>
        </li>
        <li>
          <a href="javascript:void(0)" class="accordion_head clearfix"><h4>MBA Exam Preparation</h4> <span><i class="fas fa-sort-down desk-none"></i></span></a>
          <div class="accordion_body clearfix">
            <div class="entrance-left">
              <p><a href="#">CAT</a></p>
              <p><a href="#">XAT</a></p>
              <p><a href="#">IIFT</a></p>
              <p><a href="#">CMAT</a></p>
              <p><a href="#">MAT</a></p>
              <p><a href="#">SNAP</a></p>
              <p><a href="#">GMAT</a></p>
              <p><a href="#">GRE</a></p>
            </div>
            <div class="entrance-right">
              <p><a href="#">NMAT</a></p>
              <p><a href="#">MHT-CET</a></p>
              <p><a href="#">IBSAT</a></p>
            </div>
          </div>
        </li>
        <li>
          <a href="javascript:void(0)" class="accordion_head clearfix"><h4>Courseware</h4> <span><i class="fas fa-sort-down desk-none"></i></span></a>
          <div class="accordion_body">
            <p><a href="#">Theory & Practice Tests</a></p>
            <p><a href="#">Test Series</a></p>
            <p><a href="#">Rank Booster</a></p>
            <p><a href="#">My Doubts</a></p>
          </div>
        </li>
        <li>
          <a href="javascript:void(0)" class="accordion_head clearfix"><h4>Online Free Resources</h4> <span><i class="fas fa-sort-down desk-none"></i></span></a>
          <div class="accordion_body">
            <p><a href="#">Exam Info</a></p>
            <p><a href="#">Exam Calendar</a></p>
            <p><a href="#">Daily Test Prep</a></p>
            <p><a href="#">GK & Current Affairs</a></p>
            <p><a href="#">Contests & Updates</a></p>
            <p><a href="#">Past Test Papers with Solutions</a></p>
            <p><a href="#">B-School Ranking</a></p>
            <p><a href="#">TF's Mobile App</a></p>
          </div>
        </li>
        <li>
          <a href="javascript:void(0)" class="accordion_head clearfix"><h4>Daily Test Prep</h4> <span><i class="fas fa-sort-down desk-none"></i></span></a>
          <div class="accordion_body">
            <p><a href="#">Daily Dose of Brain Tonic</a></p>
            <p><a href="#">Daily RC Passage</a></p>
            <p><a href="#">Daily Word List</a></p>
            <p><a href="#">Question of the Day</a></p>
            <p><a href="#">Puzzle of the Week</a></p>
          </div>
        </li>
      </ul>
    </div><!--footer listings-->
    <div class="centerline">
    <h2 class="background"><img src="images/footer_logo.jpg"></h2>
  </div>
    <p class="footp">TestFunda.com is a national leader in online aptitude test preparation for MBA with 7 lakhs+ registered users and 250+ institutional partners.
       TestFunda's comprehensive courseware helps students get into IIMs and other top Business Schools.
    </p>
    <div class="clearfix">
      <div class="social">
        <div class="social_main">
        <h3 class="fltlft">follow us</h3>
        <button class="icon-btn twitter">
        <a class="link" href="#" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
        <button class="icon-btn facebook">
        <a class="link" href="#" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
        <button class="icon-btn google-plus">
        <a class="link" href="#" target="_blank">
          <i class="fab fa-google-plus-g"></i>
        </a>
        </div>
      </div><!--social media-->
      <div class="reserved">
        <p>2018 ©  <span>Digital Latte,</span> All rights reserved</p>
      </div>
    </div><!--clearfix-->
  </div>
</footer>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/header_shrink.js"></script> -->
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <!--About OnScroll-Number-Increase-JavaScript -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
       $('.counter').countUp();
    </script>
    <!-- //OnScroll-Number-Increase-JavaScript -->
    <script type="text/javascript" src="js/bx-slider.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
      $(document).ready(function(){
        $('.bxflcarousel_testimonial').bxSlider({
            minSlides: 1,
            maxSlides: 1,
            controls: true,
            pager: false,
            useCSS: false,
            slideMargin: 30,
            auto: true,
            moveSlides: 1,
            startSlide: 1,
        });

        //home study pack slider
        if ($(window).width() <=480) {
                $('.bxflcarousel-studypack').bxSlider({
                    minSlides: 1,
                    maxSlides: 1,
                    controls: true,
                    pager: false,
                    slideWidth: 600,
                    useCSS: false,
                    auto: false,

                });
            }
            else if ($(window).width() < 960) {
                    $('.bxflcarousel-studypack').bxSlider({
                        minSlides: 3,
                        maxSlides: 3,
                        controls: true,
                        pager: false,
                        slideWidth: 200,
                        useCSS: false,
                        slideMargin: 30,
                        auto: false,
                        moveSlides: 1,
                        startSlide: 1,
                    });
                }
                else {
                    $('.bxflcarousel-studypack').bxSlider({
                        minSlides: 3,
                        maxSlides: 3,
                        controls: true,
                        pager: false,
                        slideWidth: 350,
                        useCSS: false,
                        slideMargin: 60,
                        auto: true,
                        moveSlides: 1,
                        startSlide: 1,
                    });
                }

                $("#menu-button").click(function(){
                  $(this).toggleClass("active");
                  $("#line-1").toggleClass("active");
                  $("#line-2").toggleClass("active");
                  $("#line-3").toggleClass("active");
                  $("#menu").slideToggle("slow");
                });
      });
    </script>
  </body>
</html>
