<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="product-detail">
    <section class="products-description">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-image">
                        <div class="row">
                            <div class="col-md-3 order-2 order-md-1">
                                <div class="product-thumb">
                                    <ul>
                                        <li>
                                            <a href="assets/images/product1.jpg"><img src="assets/images/product1.jpg" class="img-fluid"></a>
                                        </li>
                                        <li>
                                            <a href="assets/images/product2.jpg"><img src="assets/images/product2.jpg" class="img-fluid"></a>
                                        </li>
                                        <li>
                                            <a href="assets/images/product3.jpg"><img src="assets/images/product3.jpg" class="img-fluid"></a>
                                        </li>
                                        <li>
                                            <a href="assets/images/product4.jpg"><img src="assets/images/product4.jpg" class="img-fluid"></a>
                                        </li>
                                        <li>
                                            <a href="assets/images/product5.jpg"><img src="assets/images/product5.jpg" class="img-fluid"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9 main-product order-md-2 order-1">
                                <img src="assets/images/product1.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 product-title">
                    <h2>Lakeme</h2>
                    <p class="description">En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>
                    <p class="coasts">
                        <del class="mx-2 font-weight-light">259.80 ₹</del>
                        <span>30% Off</span>
                        <br>
                        <label class="mx-2">150.80 ₹</label>
                    </p>
                    <div class="mb-20 input-snipper">
                        <div class="col-md-4 pl-0">
                            <div class="col-md-9 pl-0">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="input-group-text minus-btn">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" value="1" readonly>
                                    <div class="input-group-append">
                                        <button class="input-group-text plus-btn">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn add-to-card">ADD TO CARD</button>
                    <button class="btn add-to-card ml-3">BUY NOW</button>
                </div>
            </div>
        </div>
    </section>
</section>

<?php include 'include/footer.php' ?>
</body>
<script>
    $(document).ready(function() {
        $('.product-thumb ul li a').click(function(e) {
            e.preventDefault();
            $imgURL = $(this).attr('href');
            $('.main-product img').attr('src', $imgURL);
        });
        $('.plus-btn').on('click', function() {
            var $qty = $(this).parent('.input-group-append').prev('.form-control');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal)) {
                $qty.val(currentVal + 1);
            }
        });
        $('.minus-btn').on('click', function() {
            var $qty = $(this).parent('.input-group-prepend').next('.form-control');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal)) {
                $qty.val(currentVal - 1);
            }
        });
    });
</script>

</html>