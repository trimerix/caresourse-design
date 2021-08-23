<?php include_once("header.php");?>

<section class="container-fluid banner-section">
    <?php include_once("nav.php");?>

    <!-- Banner Start  -->
    <div class="banner-wrapper">
        <div class="container banner">
            <!-- Mobile Navbar on Banner  -->
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
                            <a href="product.php">Products</a>
                        </li>
                        <li>
                            <a href="#">Best Sellers</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Mobile Navbar on Banner  -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1>The Lorem Ipsum Simply Dummy Text</h1>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout.
                                </p>
                            </div>
                            <div class="col-sm-5">
                                <img src="images/banner-img.svg" alt="banner image">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1>The Lorem Ipsum Simply Dummy Text</h1>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout.
                                </p>
                            </div>
                            <div class="col-sm-5">
                                <img src="images/banner-img.svg" alt="banner image">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1>The Lorem Ipsum Simply Dummy Text</h1>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout.
                                </p>
                            </div>
                            <div class="col-sm-5">
                                <img src="images/banner-img.svg" alt="banner image">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Banner End -->
</section>

<!-- Our Products Section Start  -->
<div class="container product-section">
    <h2>Our Products</h2>
    <div class="row">
        <div class="col">
            <img src="images/banner-img.svg" alt="Laboratory Cabinets & Medical Furnitur">
            <h5>Laboratory Cabinets & Medical Furniture</h5>
            <a href="product-list.php">Discover More</a>
        </div>
        <div class="col">
            <img src="images/product2.svg" alt="Laboratory Consumables">
            <h5>Laboratory Consumables</h5>
            <a href="product-list.php">Discover More</a>
        </div>
        <div class="col">
            <img src="images/banner-img.svg" alt="Laboratory Reagents">
            <h5>Laboratory Reagents</h5>
            <a href="product-list.php">Discover More</a>
        </div>
        <div class="col">
            <img src="images/product2.svg" alt="Marine Test Kits">
            <h5>Marine Test Kits</h5>
            <a href="product-list.php">Discover More</a>
        </div>

        <div class="col">
            <img src="images/product2.svg" alt="Medical Instruments For Export Only">
            <h5>Medical Instruments For Export Only</h5>
            <a href="product-list.php">Discover More</a>
        </div>
        <div class="col">
            <img src="images/banner-img.svg" alt="Scientific & Laboratory Equipment">
            <h5>Scientific & Laboratory Equipment </h5>
            <a href="product-list.php">Discover More</a>
        </div>
        <div class="col">
            <img src="images/product2.svg" alt="Water Testing Strips & Instruments">
            <h5>Water Testing Strips & Instruments</h5>
            <a href="product-list.php">Discover More</a>
        </div>
        <div class="col">
            <img src="images/banner-img.svg" alt="Other Products">
            <h5>Other Products</h5>
            <a href="product-list.php">Discover More</a>
        </div>
    </div>
</div>
<!-- Our Products Section End  -->

<!-- Why should you choose us Start  -->
<div class="container why-choose">
    <h2>Why should you choose us?</h2>
    <div class="row">
        <div class="col">
            <div class="img">
                <div class="dot"></div>
                <img src="images/service-img1.svg" alt="Lorem Ipsum">
            </div>

            <h6>Lorem Ipsum</h6>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <div class="col">
            <div class="img">
                <div class="dot"></div>
                <img src="images/service-img2.svg" alt="Lorem Ipsum">
            </div>

            <h6>Lorem Ipsum</h6>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <div class="col">
            <div class="img">
                <div class="dot"></div>
                <img src="images/service-img3.svg" alt="Lorem Ipsum">
            </div>

            <h6>Lorem Ipsum</h6>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <div class="col">
            <div class="img">
                <div class="dot"></div>
                <img src="images/service-img4.svg">
            </div>

            <h6>Lorem Ipsum</h6>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
    </div>
</div>
<!-- Why should you choose us End -->

<?php include_once("footer.php");?>