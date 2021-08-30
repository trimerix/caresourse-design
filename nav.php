<!-- Header Start  -->
<header class="container-fluid">
    <div class="row">
        <img src="images/logo-innerpage.svg" alt="Logo" class="innerpage-logo">
        <div class="search">
            <form action="">
                <input type="text" placeholder="Search our product" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <ul>
                <li>
                    <div class="icon">
                        <img src="images/call-icon.svg" alt="">
                    </div>
                    <div class="text">
                        <span>Call us today</span>
                        <h6>+971 4 2543131</h6>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <img src="images/mail-icon.svg" alt="">
                    </div>
                    <div class="text">
                        <span>Email</span>
                        <h6>sales@caresourceglobal.com</h6>
                    </div>
                </li>
            </ul>
        </div>
        <img src="images/logo.svg" class="logo">
        <ul class="social-media">
            <li>
                <a href="http://wa.me/971529418683" target="_blank"><img src="images/whatsapp.svg" alt=""></a>
            </li>
            <li>
                <a href="https://www.facebook.com/Caresourceglobalcom-100454609047404" target="_blank"><img
                        src="images/fb.svg" alt=""></a>
            </li>
            <li>
                <a href="https://www.instagram.com/caresourceglobal2021/" target="_blank"><img
                        src="images/instagram.svg" alt=""></a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCUHdzooQSbHJjw7n9rVl5nQ" target="_blank"><img
                        src="images/youtube.svg" alt=""></a>
            </li>
            <li>
                <a href="https://www.pinterest.com/Caresource2/_saved/" target="_blank"><img src="images/pinterest.svg"
                        alt=""></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/caresource-global-22714621a/" target="_blank"><img
                        src="images/linkedin.svg" alt=""></a>
            </li>

        </ul>
        <nav role='navigation'>
            <div id="menuToggle">

                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>

                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li class='sub-menu'><a href='#settings'>Product<div class='fa fa-caret-down right'></div></a>
                        <ul>
                            <li><a href="#">Product Category</a></li>
                            <li><a href="#">Product Category</a></li>
                            <li class='sub-menu'><a href='#settings'>Product Category<div
                                        class='fa fa-caret-down right'></div></a>
                                <ul>
                                    <li><a href="#">Product Category</a></li>
                                    <li><a href="#">Product Category</a></li>
                                    <li class='sub-menu'><a href='#settings'>Product Category<div
                                                class='fa fa-caret-down right'></div></a>
                                        <ul>
                                            <li><a href="product.php">Product Category</a></li>
                                            <li><a href="product.php">Product Category</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="best-sellers.php">
                            Best Sellers</a></li>
                    <li><a href="contactus.php">Contact us</a></li>


                </ul>

            </div>
        </nav>
    </div>
    <div class="row-nav">
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
                <li>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">Product Category</a></li>
                            <li><a tabindex="-1" href="#">Product Category</a></li>
                            <li class="dropdown-submenu">
                                <a class="test" tabindex="-1" href="#">Product Category <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="#">Product Sub Category</a></li>
                                    <li><a tabindex="-1" href="#">Product Sub Category</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="test" href="#">Product Sub Category <span class="caret"></span></a>
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
</header>
<!-- Header End  -->


<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    position: absolute;
    top: 0;
    left: 100%;
    margin-top: -1px;
}

.caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 4px dashed;
    border-top: 4px solid\9;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
}
</style>