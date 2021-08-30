<?php include_once("header.php");
 include_once("nav.php");?>


<div class="container product-banner">
    <ul class="page-navigation">
        <li><span><i class="fas fa-home"></i></span></li>
        <li><span class="font-weight-bold">/</span></li>
        <li><span>All products</span></li>
    </ul>

    <div class="row">
        <div class="product-menu">
            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li>
                    <a class="nav-link active" id="navtab1-tab" data-toggle="pill" href="#navtab1" role="tab"
                        aria-controls="navtab1" aria-selected="true">ALL PRODUCTS</a>
                </li>
                <li>
                    <a class="nav-link" id="navtab2-tab" data-toggle="pill" href="#navtab2" role="tab"
                        aria-controls="navtab2" aria-selected="false">Laboratory Cabinets & Medical Furniture</a>
                </li>
                <li>
                    <a class="nav-link" id="navtab3-tab" data-toggle="pill" href="#navtab3" role="tab"
                        aria-controls="navtab3" aria-selected="false">Laboratory Consumables</a>
                </li>
                <li class="sub-menu"><a class="nav-link">Product Category<div class="fa fa-caret-down right">
                        </div></a>
                    <ul>
                        <li><a href="#">Product Category</a></li>
                        <li><a href="#">Product Category</a></li>
                        <li class="sub-menu"><a class="nav-link">Product Category<div class="fa fa-caret-down right">
                                </div></a>
                            <ul>
                                <li><a href="#">Product Category</a></li>
                                <li><a href="#">Product Category</a></li>
                                <li class="sub-menu"><a class="nav-link">Product Category<div
                                            class="fa fa-caret-down right">
                                        </div></a>
                                    <ul>
                                        <li><a class="nav-link" id="navtab2-tab" data-toggle="pill" href="#navtab2"
                                                role="tab" aria-controls="navtab2" aria-selected="false">Laboratory
                                                Cabinets & Medical Furniture</a></li>
                                        <a class="nav-link" id="navtab1-tab" data-toggle="pill" href="#navtab1"
                                            role="tab" aria-controls="navtab1" aria-selected="false">Laboratory Cabinets
                                            & Medical Furniture</a>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" id="navtab4-tab" data-toggle="pill" href="#navtab4" role="tab"
                        aria-controls="navtab4" aria-selected="false">Marine Test Kits</a>
                </li>
                <li><a class="nav-link" id="navtab4-tab" data-toggle="pill" href="#navtab4" role="tab"
                        aria-controls="navtab4" aria-selected="false">Medical Instruments (For Export Only)</a></li>
                <li><a class="nav-link" id="navtab4-tab" data-toggle="pill" href="#navtab4" role="tab"
                        aria-controls="navtab4" aria-selected="false">Scientific & Laboratory Equipment</a></li>
                <li><a class="nav-link" id="navtab4-tab" data-toggle="pill" href="#navtab4" role="tab"
                        aria-controls="navtab4" aria-selected="false">Scientific & Laboratory Equipment</a></li>
                <li><a class="nav-link" id="navtab4-tab" data-toggle="pill" href="#navtab4" role="tab"
                        aria-controls="navtab4" aria-selected="false">Other Products</a></li>

            </ul>

        </div>
        <div class="overlay"></div>
        <div class="mobile-product-menu">
            <h3>Category</h3>
            <img src="images/mobile-filter.svg" alt="" id="mobile-filter">
        </div>
        <div class="product-right-md">
            <div class="row product-head">
                <div class="sort">
                    <span>Sort: </span>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Popular
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Best Seller</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>

                <div class="sort">
                    <span>Show products: </span>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            30
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">20</a>
                            <a class="dropdown-item" href="#">40</a>
                            <a class="dropdown-item" href="#">All Producte</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="navtab1" role="tabpanel" aria-labelledby="navtab1">
                    <div class="col-sm-4 product-box">

                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/banner-img.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>

                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/product2.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/banner-img.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/product2.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/banner-img.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/product2.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/banner-img.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/product2.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/banner-img.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/product2.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/banner-img.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/product2.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/banner-img.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/product2.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>

                    <div class="col-sm-4 product-box">
                        <div class="image-wrapper">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <img src="images/banner-img.svg" alt="The Cool Product Name">
                        </div>
                        <h3><a href="product-list.php">The Cool Product Name</a></h3>
                    </div>
                </div>
                <div class="tab-pane fade" id="navtab2" role="tabpanel" aria-labelledby="navtab2-tab">
                    ...</div>
                <div class="tab-pane fade" id="navtab3" role="tabpanel" aria-labelledby="navtab3-tab">
                    ...</div>
                <div class="tab-pane fade" id="navtab4" role="tabpanel" aria-labelledby="navtab4-tab">
                    ...</div>
                <div class="tab-pane fade" id="navtab31" role="tabpanel" aria-labelledby="navtab31-tab">
                    ...</div>
                <div class="tab-pane fade" id="navtab32" role="tabpanel" aria-labelledby="navtab32-tab">
                    ...</div>
            </div>




            <div class="row pagination-wrapper">
                <ul class="pagination">
                    <li><input type="text" name="pagination" value="1"></li>
                    <li><span>of 3</span></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
</div>



<?php include_once("footer.php");?>

<!-- Dropdown Script  -->
<script>
$(".sub-menu a").click(function() {
    $(".dropdown-content").toggleClass("active");
    $(".sub-menu a i").toggleClass("rotate");
});
</script>

<!-- Mobile Filter  -->
<script>
$(document).ready(function() {
    $("#mobile-filter").click(function() {
        $(".product-menu").addClass("filter-nav");
        $(".overlay").addClass("show");
    });

    $(".overlay").click(function() {
        $(".product-menu").removeClass("filter-nav");
        $(".overlay").removeClass("show");
    });
});
</script>