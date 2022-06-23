var cards = new function () {

    this.get_card_listing = function () {
        $.ajax({
            url: base_url + "/user/bmm-card/listing.php",
            type: "GET",
            dataType: "JSON",
            success: function (result) {
                let data = "";
                result.result.forEach(function (val) {
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
                            <a href="javascript:cards.cardRedirect(${val.id});" class="btn btn-pink buy-card">Buy Now</a>
                            <a href="membership-card-detail/${val.id}" class="btn btn-pink know-more">Know More</a>
                            </div>
                            </div>
                            </div>
                        </div>`
                });
                $("#card-list").html(data);
            }
        });
    };
    
    this.cardRedirect = function(id) {
       if (localStorage.getItem("userToken")) {
            location.href = `membership-card-checkout/${id}`;
        } else {
            $(".modal").modal("hide");
            $("#loginModal").modal("show");
        }
    };

};

cards.get_card_listing();
