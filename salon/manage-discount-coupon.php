<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body">
    <div class="top-heading">
        <h1>Manage Discount/Coupon</h1>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header" id="couponTitle">
                Create Coupon
            </div>
            <div class="card-body">
                <form action="" id="couponForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Coupon Code</label>
                                <input type="text" class="form-control" name="coupon_code">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Minimum Amount</label>
                                <input type="text" class="form-control" name="minimum_amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Discount</label>
                                        <select name="discountType" class="form-control">
                                            <option value="percentage">Discount Percentage</option>
                                            <option value="flat">Flat Discount Amount</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <div class="input-group discount_percent_group">
                                            <input type="number" class="form-control" name="discount_percent" pattern="[0-9]" onkeypress="return !(event.charCode == 46)" />
                                            <span class="input-group-text">%</span>
                                        </div>
                                        <input type="number" class="form-control display-none" name="flat_discount_amount" pattern="[0-9]" onkeypress="return !(event.charCode == 46)" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start at</label>
                                        <input type="date" class="form-control" name="start_at">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Expire at</label>
                                        <input type="date" class="form-control" name="expire_at">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" id="couponBtn" class="btn btn-primary pull-right">Submit</button>
                            <button type="button" id="couponUpdateBtn" class="btn btn-primary pull-right display-none">Update</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                Coupon List
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="couponsData">
                        <thead>
                            <tr>
                                <th>Coupon Code</th>
                                <th>Discount Percentage</th>
                                <th>Flat Discount Amount</th>
                                <th>Minimum Amount</th>
                                <th>Start at</th>
                                <th>Expire at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include('footer.php') ?>

<script>
    $(function() {

        const token = localStorage.getItem("salonToken");
        if (token) {

            let getCoupons = function() {
                $.ajax({
                    url: base_url + '/salon/get-coupon-list.php',
                    type: 'GET',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function(result) {
                        var trHTML = '';
                        $.each(result.result, function(key, value) {
                            trHTML +=
                                `<tr>
                                <td class="coupon_code">${value.coupon_code}</td>
                                <td class="discount_percent">${value.discount_percent}</td>                     
                                <td class="flat_discount_amount">${value.flat_discount_amount}</td>
                                <td class="minimum_amount">${value.minimum_amount}</td>
                                <td class="start_at">${value.start_at}</td>
                                <td class="expire_at">${value.expire_at}</td>
                                <td>
                                <ul class="action-list">
                                <li><i class="fa fa-pencil edit_coupon"></i></li>
                                <li><i class="fa fa-trash remove_coupon"></i></li>
                                </ul>
                                <span class="coupon_id display-none">${value.id}</span>
                                </td>
                                </tr>`
                        });
                        $('#couponsData tbody').append(trHTML);
                    }
                });
            }
            getCoupons();

            $('[name=discountType]').change(function() {
                if ($(this).find('option:selected').val() == 'percentage') {
                    $('[name=flat_discount_amount]').hide();
                    $('.discount_percent_group').show();
                } else {
                    $('.discount_percent_group').hide();
                    $('[name=flat_discount_amount]').show();
                }
            });


            $('#couponForm').validate({
                rules: {
                    "coupon_code": "required",
                    "discount_percent": "required",
                    "flat_discount_amount": "required",
                    "minimum_amount": "required",
                    "start_at": "required",
                    "expire_at": "required",
                },
                submitHandler: function(form) {
                    couponsSubmit();
                }
            });

            const couponsSubmit = function() {
                let post_data = {
                    "token": token,
                    "coupon_code": $('[name=coupon_code]').val(),
                    "minimum_amount": $('[name=minimum_amount]').val(),
                    "discount_percent": $('[name=discount_percent]').val(),
                    "flat_discount_amount": $('[name=flat_discount_amount]').val(),
                    "start_at": $('[name=start_at]').val(),
                    "expire_at": $('[name=expire_at]').val()
                }
                $.ajax({
                    url: `${base_url}/salon/add-coupon.php`,
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(result) {
                        $.toast({
                            heading: 'Success',
                            text: result.message,
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000)
                    },
                    error: function(error) {
                        $.toast({
                            heading: 'Error',
                            text: error.responseJSON.message,
                            showHideTransition: 'slide',
                            icon: 'error',
                        });
                    }
                });
            };

            $('body').on('click', '.remove_coupon', function() {
                var status = confirm("Are you sure to delete it?");
                if (status == true) {
                    let remove_data = {
                        "token": token,
                        "coupon_id": $(this).parents('tr').find('.coupon_id').text(),
                    }
                    $.ajax({
                        url: `${base_url}/salon/delete-coupon.php`,
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(remove_data),
                        success: function(data, item) {
                            $.toast({
                                heading: 'Success',
                                text: 'Deleted Successfully',
                                showHideTransition: 'slide',
                                icon: 'success',
                                bgColor: '#179756',
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000)
                        },
                        error: function(error) {
                            $.toast({
                                heading: 'Error',
                                text: error.responseJSON.message,
                                showHideTransition: 'slide',
                                icon: 'error',
                            });
                        }
                    });
                }
            });

            let coupon_id = '';
            $('body').on('click', '.edit_coupon', function() {
                coupon_id = $(this).parents('tr').find('.coupon_id').text();
                $('#couponBtn').hide();
                $('#couponUpdateBtn').show();
                $('#couponTitle').text('Update Coupon');
                $('[name=coupon_code]').val($(this).parents('tr').find('.coupon_code').text()).focus();
                $('[name=minimum_amount]').val($(this).parents('tr').find('.minimum_amount').text());
                $('[name=discount_percent]').val($(this).parents('tr').find('.discount_percent').text());
                $('[name=flat_discount_amount]').val($(this).parents('tr').find('.flat_discount_amount').text());
                $('[name=start_at]').val($(this).parents('tr').find('.start_at').text());
                $('[name=expire_at]').val($(this).parents('tr').find('.expire_at').text());
            });

            $('#couponUpdateBtn').click(function(){
                couponUpdateSubmit();
            });

            const couponUpdateSubmit = function() {
                let post_data = {
                    "token": token,
                    "coupon_id": coupon_id,
                    "info": {
                        "coupon_code": $('[name=coupon_code]').val(),
                        "minimum_amount": $('[name=minimum_amount]').val(),
                        "discount_percent": $('[name=discount_percent]').val(),
                        "flat_discount_amount": $('[name=flat_discount_amount]').val(),
                        "start_at": $('[name=start_at]').val(),
                        "expire_at": $('[name=expire_at]').val()
                    },
                }
                $.ajax({
                    url: `${base_url}/salon/update-coupon.php`,
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(result) {
                        $.toast({
                            heading: 'Success',
                            text: result.message,
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000)
                    },
                    error: function(error) {
                        $.toast({
                            heading: 'Error',
                            text: error.responseJSON.message,
                            showHideTransition: 'slide',
                            icon: 'error',
                        });
                    }
                });
            }

        } else {
            window.location.replace('index.php');
        }

    });
</script>