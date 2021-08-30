<!-- Footer Section Start  -->
<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="left-md">
                <img src="images/logo-footer.svg" alt="company logo">
                <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's</p> -->
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
                        <a href="https://www.pinterest.com/Caresource2/_saved/" target="_blank"><img
                                src="images/pinterest.svg" alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/caresource-global-22714621a/" target="_blank"><img
                                src="images/linkedin.svg" alt=""></a>
                    </li>

                </ul>
            </div>
            <div class="md">
                <h6>Products</h6>
                <div class="ul-wrapper">
                    <ul class="footer-ul">
                        <li>
                            <a href="product-list.php">Laboratory Cabinet & Medical Furniture</a>
                        </li>

                        <li>
                            <a href="product-list.php">Laboratory Consumables</a>
                        </li>

                        <li>
                            <a href="product-list.php">Laboratory Reagents</a>
                        </li>

                        <li>
                            <a href="product-list.php">Marine Test Kits</a>
                        </li>

                    </ul>
                    <ul class="footer-ul">

                        <li>
                            <a href="product-list.php">Medical Instrument for Export Only</a>
                        </li>

                        <li>
                            <a href="product-list.php">Scientific & Laboratory Equipment</a>
                        </li>

                        <li>
                            <a href="product-list.php">Water Testing Strips & Instrument</a>
                        </li>

                        <li>
                            <a href="product-list.php">Other Products</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-md">
                <h6>Contact</h6>
                <ul class="footer-ul">
                    <li><a href="tel:971529418683"><span>Dubai Office</span>:&nbsp;&nbsp; <i
                                class="fas fa-mobile-alt"></i>
                            &nbsp;
                            +971 529 418 683</a></li>
                    <li><a href="tel:639997620397"><span>Philippines Office</span>:&nbsp;&nbsp; <i
                                class="fas fa-mobile-alt"></i>
                            &nbsp; +639 997 620 397</a></li>
                    <li><a href="http://wa.me/971529418683"><span>India Office</span>:&nbsp;&nbsp; <i
                                class="fab fa-whatsapp"></i>
                            &nbsp; +971
                            529 418
                            683</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="container copyright">
        <div class="row">
            <span>DESIGN BY ADDICTION - © 2021. ALL RIGHTS RESERVED.</span>
            <a href="#">Privacy Policy</a>
        </div>
    </div>
</footer>
<!-- Footer Section End -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Font Awesome Icon  -->
<script src="https://kit.fontawesome.com/d6a81ea96f.js" crossorigin="anonymous"></script>

<!-- Slick Js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Script for carosel -->
<script>
$('.carousel').carousel({
    pause: "false"
});
</script>

<!-- Menu Dropdown  -->
<script>
$(".dropdown-btn").click(function() {
    $(".dropdown-container").toggleClass("active");
});
</script>


<!-- Dropdown Start  -->
<script>
$(document).ready(function() {
    $('.dropdown-submenu a.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});
</script>

<!-- mobile dropdown  -->
<script>
$('.sub-menu ul').hide();
$(".sub-menu a").click(function() {
    $(this).parent(".sub-menu").children("ul").slideToggle("100");
    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});
</script>

<!-- Mobile Nav Dropdown  -->



<script>
$("#mob-dropdown").on("click", function() {
    $(this).toggleClass("mob-dropdown");
});
</script>
</body>

</html>