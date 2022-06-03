<img src="assets/images/card-slide1.jpg" alt="">

<section class="what-new pt-4">
    <h2 class="text-center h2-heading">CARDS</h2>
    <div class="container">
        <div class="row" id="card-list">
            <div class="col-lg-4 mb-4">
                <div class="card bmm-cards">
                    <img src="" class="img-fluid">
                    <div class="card-body">
                        <h3 class="card-name"></h3>
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        data += `<div class="col-lg-4 mb-4">
                            <div class="card bmm-cards">
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
                            <div class="bmm-card-btns">
                            <a href="membership-card-checkout?card-id=${val.id}" class="btn btn-pink buy-card">Buy Now</a>
                            <a href="membership-card-detail?card-id=${val.id}" class="btn btn-pink know-more">Know More</a>
                            </div>
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