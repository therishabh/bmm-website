<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="saloon">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 saloon-img d-flex justyfy-content-center align-items-center">
        <img src="assets/images/hair-masters.png" class="img-fluid">
      </div>
      <div class="col-md-8 salon-text">
        <h1 class="mt-3">Hair Masters</h1>
      </div>
    </div>
  </div>
</section>


<section class="bmm-tv-playlist-section bmm-card-playlist-section">
  <div class="container">

    <div class="card-box">
      <div class="row">
        <div class="col-md-5 d-none">
          <img src="assets/images/privilege-card.png" class="img-fluid" alt="">
          <img src="assets/images/privilege-card-info.png" class="img-fluid mt-4" alt="">
          <img src="assets/images/privilege-card-info-2.png" class="img-fluid mt-4" alt="">
        </div>
        <div class="col-md-7">

          <h4 class="float-left mt-3">Privilege Card &nbsp; <span class="font-weight-normal"><small><i class="fa fa-rupee-sign"></i></small> 10000</span> </h4>
          <a href="#" class="btn btn-pink float-right" data-toggle="modal" data-target="#cardFormModal">Buy Now</a>
          <div class="clearfix"></div>
          <div class="row mt-3">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered card-table">
                  <thead>
                    <tr>
                      <th>Services</th>
                      <th>Free Worth</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Two Aroma Gold Facial</td>
                      <td>Rs. 2000 + Rs. 2000</td>
                    </tr>
                    <tr>
                      <td>Two Aroma Magic Cleanup</td>
                      <td>Rs. 1000 + Rs. 1000</td>
                    </tr>
                    <tr>
                      <td>Two Half legs wax</td>
                      <td>Rs. 250 + Rs. 250</td>
                    </tr>
                    <tr>
                      <td>Two Haircut with blow dry</td>
                      <td>Rs. 250 + Rs. 250</td>
                    </tr>
                    <tr>
                      <td>Two Head Massage</td>
                      <td>Rs. 350 + Rs. 350</td>
                    </tr>
                    <tr>
                      <td>Two Reinvent Facial</td>
                      <td>Rs. 2000 + Rs. 2000</td>
                    </tr>
                    <tr>
                      <td>Two Gold Cleanup</td>
                      <td>Rs. 1000 + Rs. 1000</td>
                    </tr>
                    <tr>
                      <td>Two Manicure</td>
                      <td>Rs. 250 + Rs. 250</td>
                    </tr>
                    <tr>
                      <td>Two Hair Cut</td>
                      <td>Rs. 450 + Rs. 450</td>
                    </tr>
                    <tr>
                      <td>Two Hair Pressing</td>
                      <td>Rs. 750 + Rs. 750</td>
                    </tr>
                    <tr>
                      <td>Two Streaks</td>
                      <td>Rs. 500 + Rs. 500</td>
                    </tr>
                    <tr>
                      <td>Two Full Arm Wax</td>
                      <td>Rs 500 + Rs 500</td>
                    </tr>
                    <tr>
                      <td>Two Pedicure</td>
                      <td>Rs. 350 + Rs. 350</td>
                    </tr>
                    <tr>
                      <td>Two Hair Spa </td>
                      <td>Rs. 1000 + Rs. 1000</td>
                    </tr>
                    <tr>
                      <td>Two Bleach </td>
                      <td>Rs. 300 + Rs. 300</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <p class="mb-1 mt-3"><b>Terms & Conditions</b></p>
          <ul class="common-list card-term-conditions-list">
            <li>Valid for 1 year from the date of issue.</li>
            <li>Maximum 7 days gap required between free visit.</li>
            <li>Booking must be between 11am to 7pm</li>
            <li>No verbal commitment accpepted.</li>
          </ul>
        </div>

      </div>
    </div>





  </div>
</section>

<?php include 'include/footer.php' ?>


<!-- The Modal -->
<div class="modal cardFormModal" id="cardFormModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal body -->
      <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      <div class="modal-body">
        <div class="form-group">
          <h4>Privilege Card</h4>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Full Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Mobile">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <button type="button" class="btn btn-primary btn-block" onclick="window.open('pay.php','_self')">Buy Now</button>
        </div>
      </div>


    </div>
  </div>
</div>

</body>

</html>