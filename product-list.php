<?php include_once("header.php");
 include_once("nav.php");?>


<!-- First Section Start -->
<div class="container product-banner">
    <div class="row">
        <div class="col-sm-6">
            <ul class="page-navigation">
                <li><span><i class="fas fa-home"></i></span></li>
                <li><span class="font-weight-bold">/</span></li>
                <li><span>All products</span></li>
                <li><span class="font-weight-bold">/</span></li>
                <li><span>Category</span></li>
                <li><span class="font-weight-bold">/</span></li>
                <li><span>Sub Category</span></li>
            </ul>
            <div class="main">

                <div class="slider slider-for">
                    <div class="image">
                        <img src="images/banner-img.svg" alt="">
                    </div>
                    <div class="image">
                        <img src="images/product2.svg" alt="">
                    </div>
                    <div class="image">
                        <img src="images/banner-img.svg" alt="">
                    </div>
                    <div class="image">
                        <img src="images/product2.svg" alt="">
                    </div>
                    <div class="image">
                        <img src="images/banner-img.svg" alt="">
                    </div>
                    <div class="image">
                        <img src="images/product2.svg" alt="">
                    </div>
                </div>
                <div class="slider slider-nav">
                    <div class="image">
                        <img src="images/banner-img.svg" alt="">
                    </div>
                    <div class="image">
                        <img src="images/product2.svg" alt="">
                    </div>
                    <div class="image">
                        <img src="images/banner-img.svg" alt="">
                    </div>
                    <div class="image">
                        <img src="images/product2.svg" alt="">
                    </div>
                    <div class="image">
                        <img src="images/banner-img.svg" alt="">
                    </div>
                    <div class="image">
                        <img src="images/product2.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
        <div class="col right-md">
            <span class="feacherd">FEATURED</span>
            <h1>The Cool Product
                Name</h1>
            <span>Product ID: 261311</span>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop </p>
            <div class="bottom-content">
                <div class="number">
                    <span class="minus"><i class="fas fa-minus"></i></span>
                    <input type="text" value="0" />
                    <span class="plus"><i class="fas fa-plus"></i></span>
                </div>
                <a href="#" class="get-quote"><i class="far fa-envelope"></i> Get Quote</a>
                <a href="#" class="get-whatsapp"><i class="fab fa-whatsapp"></i> Get Quote</a>
                <a href="#"><i class="far fa-heart wish-list"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- First Section End -->

<!-- Product List Tabs Start  -->
<div class="product-feature container">
    <div class="row">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Specifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="download-tab" data-toggle="tab" href="#download" role="tab"
                    aria-controls="download" aria-selected="false">Downloads</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                    the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, remaining essentially unchanged. </p>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book.</p>
            </div>
            <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="heading1">
                    <h5 class="mb-0" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
                        aria-controls="collapse1">
                        Features <i class="fas fa-chevron-down"></i>
                    </h5>
                </div>

                <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                    <div class="card-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header" id="heading2">
                    <h5 class="mb-0" data-toggle="collapse" data-target="#collapse2" aria-expanded="true"
                        aria-controls="collapse2">
                        Models <i class="fas fa-chevron-down"></i>
                    </h5>
                </div>

                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                    <div class="card-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="heading3">
                    <h5 class="mb-0" data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
                        aria-controls="collapse3">
                        Accessories <i class="fas fa-chevron-down"></i>
                    </h5>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                    <div class="card-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="heading4">
                    <h5 class="mb-0" data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
                        aria-controls="collapse4">
                        Specifications <i class="fas fa-chevron-down"></i>
                    </h5>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                    <div class="card-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="heading5">
                    <h5 class="mb-0" data-toggle="collapse" data-target="#collapse5" aria-expanded="false"
                        aria-controls="collapse5">
                        Videos <i class="fas fa-chevron-down"></i>
                    </h5>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                    <div class="card-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="heading6">
                    <h5 class="mb-0" data-toggle="collapse" data-target="#collapse6" aria-expanded="false"
                        aria-controls="collapse6">
                        Downloads<i class="fas fa-chevron-down"></i>
                    </h5>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                    <div class="card-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- Product List Tabs End -->


<!-- Related Product Start -->
<div class="container related-product">
    <h1>Related Products</h1>
    <div class="related-product-slider">
        <div class="box">
            <div class="image-wrapper">
                <img src="images/banner-img.svg" alt="The Cool Product Name">
            </div>
            <h6>The Cool Product Name</h6>
        </div>
        <div class="box">
            <div class="image-wrapper">
                <img src="images/product2.svg" alt="The Cool Product Name">
            </div>
            <h6>The Cool Product Name</h6>
        </div>
        <div class="box">
            <div class="image-wrapper">
                <img src="images/banner-img.svg" alt="The Cool Product Name">
            </div>
            <h6>The Cool Product Name</h6>
        </div>
        <div class="box">
            <div class="image-wrapper">
                <img src="images/product2.svg" alt="The Cool Product Name">
            </div>
            <h6>The Cool Product Name</h6>
        </div>
        <div class="box">
            <div class="image-wrapper">
                <img src="images/banner-img.svg" alt="The Cool Product Name">
            </div>
            <h6>The Cool Product Name</h6>
        </div>
        <div class="box">
            <div class="image-wrapper">
                <img src="images/product2.svg" alt="The Cool Product Name">
            </div>
            <h6>The Cool Product Name</h6>
        </div>
    </div>
</div>
<!-- Related Product End -->


<?php include_once("footer.php");?>

<!-- Script for Product Banner  -->
<script>
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    focusOnSelect: true,
    prevArrow: "<img class='a-left control-c prev slick-prev' src='images/product-left.svg'>",
    nextArrow: "<img class='a-right control-c next slick-next' src='images/product-right.svg'>",
    responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

    ]
});

$('a[data-slide]').click(function(e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.slider-nav').slick('slickGoTo', slideno - 1);
});
</script>
<!-- Script for Plus and Minus Input  -->
<script>
$(document).ready(function() {
    $('.minus').click(function() {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function() {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});
</script>
<!--  Script for Related Product  -->
<script>
$('.related-product-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    prevArrow: "<img class='a-left control-c prev slick-prev' src='images/left-arrow.svg'>",
    nextArrow: "<img class='a-right control-c next slick-next' src='images/right-arrow.svg'>",
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

    ]
});
</script>

<!-- Collapse Icon  -->
<script>
$(".card-header h5").on("click", function() {
    $(".card-header h5 i").addClass("rotate");
    $(this).removeClass("rotate");
});
</script>