  <?php include_once("header.php");?>
  <section class="container-fluid banner-section">
      <?php include_once("nav.php");?>

      <style>
      .banner-wrapper {
          align-items: flex-end;
      }

      .banner-section {
          min-height: 80vh;
          overflow: unset;
      }

      .banner {
          position: relative;
      }


      @media screen and (max-width:1365px) {
          .banner-section {
              min-height: 575px;
          }
      }
      </style>

      <!-- Banner Start  -->
      <div class="banner-wrapper">
          <div class="container banner">
              <!-- Mobile Navbar on Banner Start -->
              <div class="banner-nav">
                  <div class="right-md">
                      <ul class="menu">
                          <li>
                              <a href="index.php">Home</a>
                          </li>
                          <li>
                              <a href="about.php">About Us</a>
                          </li>
                          <li>
                              <a href="blog.php">Blog</a>
                          </li>
                      </ul>
                  </div>

                  <div class="left-md">
                      <ul class="menu">
                          <li id="mob-dropdown">
                              <div class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li><a tabindex="-1" href="#">Product Category</a></li>
                                      <li><a tabindex="-1" href="#">Product Category</a></li>
                                      <li class="dropdown-submenu">
                                          <a class="test" tabindex="-1" href="#">Product Category <span
                                                  class="caret"></span></a>
                                          <ul class="dropdown-menu">
                                              <li><a tabindex="-1" href="#">Product Sub Category</a></li>
                                              <li><a tabindex="-1" href="#">Product Sub Category</a></li>
                                              <li class="dropdown-submenu">
                                                  <a class="test" href="#">Product Sub Category <span
                                                          class="caret"></span></a>
                                                  <ul class="dropdown-menu">
                                                      <li><a href="product.php">Sub Category</a></li>
                                                      <li><a href="product.php">Sub Category</a></li>
                                                  </ul>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                          <li>
                              <a href="best-sellers.php">Best Sellers</a>
                          </li>
                          <li>
                              <a href="contactus.php">Contact Us</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <!-- Mobile Navbar on Banner End  -->

          </div>
      </div>
      <!-- Banner End -->
  </section>

  <!-- Locations Start  -->
  <div class="container office-location">
      <div class="row">
          <div class="col-sm-4">
              <div class="box">
                  <img src="images/location-icon.png" alt="Location Icon">
                  <h3>Dubai Office</h3>
                  <p>CARESOURCE for SCIENTIFIC & LABORATORY EQUIPMENT TR. CO. L.L.C</p>
                  <p>3, Plot 215-321, Umm Ramool, Rashidiya PO Box # 94703, Dubai, UAE</p>
                  <p>Mobile: +971529418683</p>
                  <p>Office Timing: 9:00 Am to 6:00PM (SUNDAY TO THURSDAY) </p>

              </div>
          </div>

          <div class="col-sm-4">
              <div class="box">
                  <img src="images/location-icon.png" alt="Location Icon">
                  <h3>Philippines Office</h3>
                  <p>CARESOURCE GLOBAL INC</p>
                  <p>BLK 72 lot 18A Jp Rizal Street Upper Bicutan Taguig City</p>
                  <p>Email: sales@caresourceglobal.com</p>
                  <p>Whatsapp: +971529418683</p>
                  <p>Mobile: +639997620397</p>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="box">
                  <img src="images/location-icon.png" alt="Location Icon">
                  <h3>India Office</h3>
                  <p>CARESOURCE GLOBAL LTD</p>
                  <p>Forza mall -1 Office No: F85 Tirur Kerala India</p>
                  <p>Email: sales@caresourceglobal.com</p>
                  <p>Whatsapp: +971529418683</p>
              </div>
          </div>
      </div>
  </div>
  <!-- Locations End -->


  <!-- Input Boxes Start  -->
  <div class="container">
      <div class="container-fluid inputboxes">
          <h6>Get A Quote</h6>
          <div class="row">
              <div class="col-sm-6">
                  <input type="text" name="name" placeholder="Enter your name">
              </div>
              <div class="col-sm-6">
                  <input type="email" name="mail" placeholder="Enter your email">
              </div>
              <div class="col-sm-6">
                  <input type="text" name="number" placeholder="Enter your contact number">
              </div>
          </div>
          <div class="row">
              <div class="col-sm-12">
                  <textarea name="message" placeholder="Enter message"></textarea>
              </div>
          </div>
          <button type="submit">Submit</button>
      </div>
  </div>
  <!-- Input Boxes End  -->


  <!-- Map Start  -->
  <div class="container-fluid map">
      <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1804.6788229304775!2d55.37174012057747!3d25.224876256402123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDEzJzI5LjMiTiA1NcKwMjInMjIuMiJF!5e0!3m2!1sen!2sin!4v1630316125401!5m2!1sen!2sin"
          width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  <!-- Map End  -->



  <?php include_once("footer.php");?>