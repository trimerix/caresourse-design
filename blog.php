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

  <div class="container blog-wrapper">
      <div class="row">
          <div class="col-sm-4">
              <div class="box">
                  <img src="images/banner.svg" alt="">
                  <div class="text-box">
                      <h3>Lorem ipsum dolor, sit amet consectetur.</h3>
                      <div class="bottom-content">
                          <div class="date">
                              <i class="far fa-calendar-alt"></i>
                              23/04/2021
                          </div>
                          <a href="blog-details.php">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="box">
                  <img src="images/banner.svg" alt="">
                  <div class="text-box">
                      <h3>Lorem ipsum dolor, sit amet consectetur.</h3>
                      <div class="bottom-content">
                          <div class="date">
                              <i class="far fa-calendar-alt"></i>
                              23/04/2021
                          </div>
                          <a href="blog-details.php">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="box">
                  <img src="images/banner.svg" alt="">
                  <div class="text-box">
                      <h3>Lorem ipsum dolor, sit amet consectetur.</h3>
                      <div class="bottom-content">
                          <div class="date">
                              <i class="far fa-calendar-alt"></i>
                              23/04/2021
                          </div>
                          <a href="blog-details.php">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="box">
                  <img src="images/banner.svg" alt="">
                  <div class="text-box">
                      <h3>Lorem ipsum dolor, sit amet consectetur.</h3>
                      <div class="bottom-content">
                          <div class="date">
                              <i class="far fa-calendar-alt"></i>
                              23/04/2021
                          </div>
                          <a href="blog-details.php">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="box">
                  <img src="images/banner.svg" alt="">
                  <div class="text-box">
                      <h3>Lorem ipsum dolor, sit amet consectetur.</h3>
                      <div class="bottom-content">
                          <div class="date">
                              <i class="far fa-calendar-alt"></i>
                              23/04/2021
                          </div>
                          <a href="blog-details.php">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="box">
                  <img src="images/banner.svg" alt="">
                  <div class="text-box">
                      <h3>Lorem ipsum dolor, sit amet consectetur.</h3>
                      <div class="bottom-content">
                          <div class="date">
                              <i class="far fa-calendar-alt"></i>
                              23/04/2021
                          </div>
                          <a href="blog-details.php">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row pagination-wrapper">
          <ul class="pagination">
              <li><input type="text" name="pagination" value="1"></li>
              <li><span>of 3</span></li>
              <li><a href="#"><i class="fas fa-chevron-right" aria-hidden="true"></i></a></li>
          </ul>
      </div>
  </div>








  <?php include_once("footer.php");?>