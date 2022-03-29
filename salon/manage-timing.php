<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body" class="timings-page">
    <div class="top-heading">
        <h1>Timings</h1>
        <div class="button-wrapper">
            <button class="btn btn-primary submit-btn display-none">Submit</button>
        </div>
    </div>
    <div id="salonPricing">
        <div class="card mb-3">
            <div class="card-header">
                Manage Timing
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered" id="timingTable">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" width="4%">#</th>
                                    <th scope="col" width="15%">Days</th>
                                    <th scope="col" width="15%">Open Time</th>
                                    <th scope="col" width="15%">Close Time</th>
                                    <th scope="col" width="15%">Closed</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="button-wrapper text-right">
        <button class="btn btn-primary submit-btn">Submit</button>
    </div>
    <!-- <div class="loading-wrapper">
        <img src="./includes/img/loader.gif" alt="loading">
    </div> -->
</section>
<?php include('footer.php') ?>
<script>
    $(function() {
        const token = localStorage.getItem("salonToken");
        if (token) {
            var daysArray = [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday", "Sunday",
            ];
            var counter = 1;
            daysArray.forEach(val => {
                $("#timingTable tbody").append(
                    `<tr>
                        <td>${counter++}</td>
                        <td class="day">${val}</td>
                        <td class="open_at"><input type="time" class="form-control"></td>
                        <td class="close_at"><input type="time" class="form-control"></td>
                        <td class="is_closed">
                            <label class="custom-switch ps-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" value="1">
                                <span class="custom-switch-indicator me-3"></span>
                                <span class="custom-switch-description mg-l-10">Closed</span>
                            </label>
                        </td>
                    </tr>
                    `
                )
            });

            var getSalonTimings = function() {
                const url = `${base_url}/salon/get-info.php`;
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        token: token,
                        q: "timings"
                    },
                    success: function(result) {
                        mapTimingToDom(result.result.timings);
                    }
                });
            }

            var mapTimingToDom = function(data) {
                if (data.length > 0) {
                    data.forEach(val => {
                        $("#timingTable tbody tr").each(function(v) {
                            const day = $(this).children('td.day').text();
                            if (day == val.day) {
                                if (val.is_closed == 1) {
                                    $(this).children('td.open_at').children('input').val('').attr('disabled', true);
                                    $(this).children('td.close_at').children('input').val('').attr('disabled', true);
                                    $(this).children('td.is_closed').find('input').attr('checked', true);
                                } else {
                                    $(this).children('td.open_at').children('input').val(val.open_at)
                                    $(this).children('td.close_at').children('input').val(val.close_at);
                                }
                            }
                        });
                    })
                }
            }

            getSalonTimings();

            $(".submit-btn").click(function() {
                var timingArr = [];
                $("#timingTable tbody tr").each(function(v) {
                    const isClosed = parseInt($(this).children('td.is_closed').find('input:checked').val());
                    var serviceObj = {
                        day: $(this).children('td.day').text(),
                        open_at: isClosed == 1 ? "" : $(this).children('td.open_at').children('input').val(),
                        close_at: isClosed == 1 ? "" : $(this).children('td.close_at').children('input').val(),
                        is_closed: isClosed == 1 ? 1 : 0,
                    }
                    timingArr.push(serviceObj);
                });

                const url = `${base_url}/salon/add-info.php`;
                const postData = {
                    token: token,
                    timings: timingArr
                }
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(postData),
                    success: function(result) {
                        $.toast({
                            heading: 'Success',
                            text: result.message,
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                    }
                });
            });

            $("#timingTable tbody tr td.is_closed input[type='checkbox']").change(function() {
                if ($(this).is(':checked')) {
                    $(this).parents('tr').children('td.open_at').children('input').val('').attr('disabled', true);
                    $(this).parents('tr').children('td.close_at').children('input').val('').attr('disabled', true);
                } else {
                    $(this).parents('tr').children('td.open_at').children('input').removeAttr('disabled');
                    $(this).parents('tr').children('td.close_at').children('input').removeAttr('disabled');
                }
            })

        } else {
            window.location.replace('index.php');
        }
    });
</script>