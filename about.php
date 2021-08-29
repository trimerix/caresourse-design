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

      .banner p {
          margin: 50px 0;
          height: 200px;
          display: flex;
          align-items: flex-end;
      }

      @media screen and (max-width:767px) {
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
                              <a href="#">Blog</a>
                          </li>
                      </ul>
                  </div>

                  <div class="left-md">
                      <ul class="menu">
                          <li>
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
                                                      <li><a href="#">Sub Category</a></li>
                                                      <li><a href="#">Sub Category</a></li>
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
                              <a href="#">Contact Us</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <!-- Mobile Navbar on Banner End  -->

          </div>
      </div>
      <!-- Banner End -->
  </section>

  <div class="container aboutus">
      <div class="row banner-content container">
          <div class="col-sm-5">
              <p>"Caresourse" is in the business line of providing a wide array of Scientific & Laboratory
                  Equipment, Medical, Surgical Equipment & Instruments, Water Testing Products from top
                  manufacturing brand worldwide. </p>
          </div>
          <div class="about-img">
              <img src="images/about-img.png" alt="About US Image">
          </div>
      </div>
      <div class="row">
          <div class="col-sm-6">
              <p>Over the years, our world has been accumulated by the COVID -19 which pushes us to pursue our goal to
                  build a standard of high quality products at very reasonable prices. <br><br>

                  We at "Caresource" ensure that we hold ourselves accountable to the highest standards by meeting our
                  customers’ needs precisely and completely whenever they patronize our products. <br><br>

                  We are continuously evolving to become an industry leader in the vibrant field of Medical
                  Technologies.</p>
          </div>
      </div>
  </div>

  <div class="container mission-vission">
      <div class="row">
          <div class="box">
              <p>"Caresourse" a globally recognized trading company established world-wide with an excellence in
                  products and services. We strive to meet the increasing and diversified demands of clients by
                  providing standard and state of the art products. Having partnered with various world renowned and
                  reputed suppliers across the globe we are able to update our clients of the fast moving trends and
                  have emerged as the most preferred supplier for numerous top end clients in the region.</p>
              <div class="img">
                  <img src="images/mission.svg" alt="mission">
                  <img src="images/mission-text.svg" alt="mission">
              </div>

          </div>

          <div class="box">
              <div class="img">
                  <img src="images/vision.svg" alt="vision">
                  <img src="images/vission-text.svg" alt="vision">
              </div>

              <p>We as a company are well aware that we have a social impact and commitment as an organization beyond
                  our core business objectives on the world in which we live, and the people we interact with. Our
                  actions impact our employees, our customers, our suppliers, the communities in which we live and work,
                  and the environment. As a responsible and ethical participant in the global community our purchasing
                  policy takes sustainability and ethical sourcing into consideration throughout all stages of the
                  buying cycle.</p>

          </div>
      </div>
  </div>

  <?php include_once("footer.php");?>

  <!-- Mobile Nav Dropdown  -->
  <script>
$(".banner-nav .menu li").on("click", function() {
    $(this).toggleClass("mob-dropdown");
});
  </script>