<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<img src="assets/images/card-slide1.jpg" alt="">

<section class="what-new pt-4">
    <h2 class="text-center h2-heading">CARDS</h2>
    <div class="container">

        <!-- <div class="card mb-3" style="background-color:#f8f9fa; padding:20px"> -->
        <!-- <div class="row">
                <div class="col-sm-4">
                    <a href="https://pages.razorpay.com/pl_GPJy4JRpwQ8TkO/view" target="_blank" class="box-shadow">
                        <img src="assets/images/image17.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="col-sm-6 m-2">
                    <h3>Flexi Card</h3>
                    <ul>
                        <li>Exclusive Benefits on card price of 11000/-</li>
                        <li>Get 4000/- more on 11000/- card price + 500 BMM Points.</li>
                        <li>Card Validity for 6 months.</li>
                        <li>EMI starts at 1099.</li>
                    </ul>
                    <button class="btn btn-pink buy-card m-2">Buy Now</button>
                    <button class="btn btn-pink know-more m-2">Know More</button>
                </div>
            </div> -->

        <!-- ---------------------------------------------------------- -->

        <div class="row" id="card-list">
            <div class="col-lg-6 mb-4">
                <div class="card" style="padding: 30px; margin:30px">
                    <img src="" class="img-fluid">
                    <div class="card-body">
                        <h3 class="card-name"></h3>
                        <ul>
                            <!-- <li>Exclusive Benefits on card price of 11000/-</li>
                            <li>Get 4000/- more on 11000/- card price + 500 BMM Points.</li>
                            <li>Card Validity for 6 months.</li>
                            <li>EMI starts at 1099.</li>
                            <li>No Joining Fee , No Annual Fee</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'include/footer.php' ?>


<script>
    $(function() {

        //CARD LISTING STARTS HERE----------------------------------
        get_card_listing = function() {
            $.ajax({
                url: base_url + "/user/bmm-card/listing.php",
                type: "GET",
                dataType: "JSON",
                success: function(result) {
                    // console.log(result);
                    let data = "";
                    result.result.forEach(function(val) {
                        data += `<div class="col-lg-6 mb-4">
                            <div class="card" style="padding: 30px; margin:30px">
                            <img src="${val.image}" class="img-fluid">
                            <div class="card-body">
                            <h3>${val.card_name}</h3>
                            <ul>
                                <li>Exclusive Benefits on card price of ${val.price}</li>
                                <li>Get card with value of ${val.value}.</li>
                                <li>Card Validity for ${val.validity}.</li>
                                <li>Card Category : ${val.category}.</li>
                                <li>No Joining Fee , No Annual Fee</li>
                            </ul>
                            <a href="#" class="btn btn-pink buy-card m-2">Buy Now</a>
                            <a href="<?php echo base_url(); ?>membership-card-detail.php?card-id=${val.id}" class="btn btn-pink know-more m-2">Know More</a>
                            </div>
                            </div>
                        </div>`
                    });
                    $("#card-list").html(data);
                }
            });
        };
        get_card_listing();
        //CARD LISTING ENDS HERE------------------------------------

    });
</script>