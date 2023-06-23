<?php
include_once("nav.php")
?>

  <!-- Slideshow-->

  <div class="container">

  <div class="slide-container active">
      <div class="slide">
        <div class="content">
          <h3>Hotel Ter Duin</h3>
          <p>Info about our hotel</p>
          <a href="bestellen.html" class="btn">RESERVE</a>
        </div>
        <div class="image">
          <img src="img/hotel.png" alt="">
        </div>
      </div>
    </div>

    <div class="slide-container active">
      <div class="slide">
        <div class="content">
          <h3>Superior Triple Room</h3>
          <p>The triple room provides air conditioning, a tea and coffee maker,
             as well as a private bathroom featuring a walk-in shower and a hairdryer.</p>
          <a href="bestellen.html" class="btn">RESERVE</a>
        </div>
        <div class="image">
          <img src="img/Room1.jpg" alt="">
        </div>
      </div>
    </div>

    <div class="slide-container">
      <div class="slide">
        <div class="content">
          <h3>Family Room</h3>
          <p>The spacious family room offers air conditioning, a tea and coffee maker, 
            as well as a private bathroom boasting a walk-in shower and a bath. 
            The family room has carpeted floors, a seating area with a flat-screen TV with cable channels, a wardrobe, a safe deposit box, 
            as well as a sofa. The unit has 1 bed.</p>
          <a href="bestellen.html" class="btn">RESERVE</a>
        </div>
        <div class="image">
          <img src="img/Room2.jpg" alt="">
        </div>
      </div>
    </div>


    <div class="slide-container">
      <div class="slide">
        <div class="content">
          <h3>Junior Suite</h3>
          <p> The air-conditioned suite features 1 bedroom and 1 bathroom with a walk-in shower and a bath. 
            The suite has carpeted floors, a seating area with a flat-screen TV with cable channels,
             a tea and coffee maker, a wardrobe, as well as a safe deposit box. The unit offers 2 beds.</p>
          <a href="bestellen.html" class="btn">RESERVE</a>
        </div>
        <div class="image">
          <img src="img/Room3.jpg" alt="">
        </div>
      </div>
    </div>
<!-- Add more popular room entries here -->
<h5>POPULAR</h5>
    <div class="container2">
    
    <div class="popularroom">
        <img src="img/Room1.jpg" alt="popular room Cover">
        <h2>Superior Triple Room</h2>
        <p>2 single bedsor1 extra-large double bed<br>
           3 adults maximum + 2 children </p>
    </div>
    <div class="popularroom">
        <img src="img/Room2.jpg" alt="popular room Cover">
        <h2>Family Room</h2>
        <p>1 extra-large double be<br>
           3 adults maximum + 2 children</p>
    </div>
    <div class="popularroom">
        <img src="img/Room3.jpg " alt="popular room Cover">
        <h2>Junior Suite</h2>
        <p>2 single beds<br>
           3 adults maximum + 2 children</p>
    </div>
  </div>
    <!-- Slideshow script-->

    <script>

      let slides = document.querySelectorAll('.slide-container');
      let index = 0;

      //next function
      function next() {
        slides[index].classList.remove('active');
        index = (index + 1) % slides.length;
        slides[index].classList.add('active');
      }

      // previous function
      function prev() {
        slides[index].classList.remove('active');
        index = (index - 1 + slides.length) % slides.length;
        slides[index].classList.add('active');
      }

      //autoplay

      setInterval(next, 4000); 

    </script>



  </body>
   <!-- Footer-->

   <footer class="footer">
    <div class="containerr">
      <div class="row">
        <div class="footer-col">
          <h4>Virtual Zone</h4>

          <li><a href="informatie.html">about us</a></li>
          <li><a href="#">our services</a></li>
          <li><a href="privacybeleid.html">privacybeleid</a></li>
          <li><a href="Contact.html">Contact</a></li>

        </div>
        <div class="footer-col">
          <h4> get help</h4>

          <li><a href="FAQ.html">FAQ</a></li>
          <li><a href="#">shipping</a></li>
          <li><a href="#">returns</a></li>
          <li><a href="#">order status</a></li>
        </div>
        
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Einde Footer-->


  </html>