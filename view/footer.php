<div class=" row mb custom-footer">
  <section class="custom-footer-social">
    <div class="custom-footer-social-content">
      <div class="custom-footer-social-left">
        <span>Get connected with us on social networks:</span>
      </div>
      <div class="custom-footer-social-right">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
      </div>

    </div>
  </section>

  <section class="custom-footer-links">
    <div class="custom-footer-links-content">
      <div class="custom-footer-column">
        <h6>Company name</h6>
        <hr class="custom-footer-hr">
        <p>
          Here you can use rows and columns to organize your footer content.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </div>
      <div class="custom-footer-column">
        <h6>Products</h6>
        <hr class="custom-footer-hr">
        <p><a href="#!" class="text-dark">MDBootstrap</a></p>
        <p><a href="#!" class="text-dark">MDWordPress</a></p>
        <p><a href="#!" class="text-dark">BrandFlow</a></p>
        <p><a href="#!" class="text-dark">Bootstrap Angular</a></p>
      </div>
      <div class="custom-footer-column">
        <h6>Useful links</h6>
        <hr class="custom-footer-hr">
        <p><a href="#!" class="text-dark">Your Account</a></p>
        <p><a href="#!" class="text-dark">Become an Affiliate</a></p>
        <p><a href="#!" class="text-dark">Shipping Rates</a></p>
        <p><a href="#!" class="text-dark">Help</a></p>
      </div>
      <div class="custom-footer-column">
        <h6>Contact</h6>
        <hr class="custom-footer-hr">
        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
      </div>
    </div>
  </section>

  <div class="custom-footer-bottom">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
</div>

        </div>
    </div>


    <!-- js slideshow -->

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>
</html>