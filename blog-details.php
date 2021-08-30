  <?php include_once("header.php");?>
  <section class="container-fluid banner-section">
      <?php include_once("nav.php");?>

      <style>
      .banner-wrapper {
          align-items: flex-end;
      }

      .banner-section {
          min-height: 70vh;
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


  <!-- Blog Detils Section  -->
  <div class="blogdetails">
      <div class="box">
          <h2>Business contents insurance is a type of business insurance that can protect</h2>
          <div class="date">
              <i class="far fa-calendar-alt" aria-hidden="true"></i>
              23/04/2021
          </div>
          <img src="images/banner.svg" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
              doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
              fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
              est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
              tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>


      </div>
  </div>
  <!-- Blog Detils Section  -->







  <?php include_once("footer.php");?>