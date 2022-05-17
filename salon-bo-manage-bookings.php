
<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="manage-list">
                    <a href="#" class="makeup-artist-opener"><span><i class="fa fa-users icon"></i> Manage Bookings</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-location-details.php"><i class="fa fa-map-marker-alt icon"></i> Branch Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-add-stylist.php"><i class="fa fa-user icon"></i>Add Stylist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-manage-bookings.php"><i class="fa fa-users icon"></i> Manage Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-create-bookings.php"><i class="fa fa-user-plus icon"></i> Create Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-manage-job-cards.php"><i class="fa fa-credit-card icon"></i> Manage Job Cards </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-manage-payments.php"><i class="fa fa-rupee-sign icon"></i> Manage Payments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-services.php"><i class="fa fa-cog icon"></i> Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-amenities.php"><i class="fa fa-hands icon"></i>Amenities </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-timings.php"><i class="far fa-clock icon"></i> Timings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-manage-pics.php"><i class="fa fa-image icon"></i>Manage Pics & Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-manage-reviews.php"><i class="fa fa-star icon"></i>Manage Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-power-off icon"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="manage-user-icon">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="h2-heading">Manage Bookings</h2>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Scheduled</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>No Show</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Cancelled</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>Approved</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>Completed</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <th>60</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-8">
                                <div id="canvas-holder">
                                    <canvas id="chart-area"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">

                            <div class="table-responsive mt-4">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date & Time</th>
                                            <th>Customer Name</th>
                                            <th>Services</th>
                                            <th>Stylist</th>
                                            <th>Job Card</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10:20 AM, 10/31/2020</td>
                                            <td>Rohit Verma</td>
                                            <td>Hair Cutting</td>
                                            <td>Raj Sharma</td>
                                            <td></td>
                                            <!-- <td><button class="btn btn-pink btn-sm">Create</button></td> -->
                                            <td> <b class="text-warning"> Scheduled </b></td>
                                        </tr>
                                        <tr>
                                            <td>10:20 AM, 10/31/2020</td>
                                            <td>Rohit Verma</td>
                                            <td>Hair Cutting</td>
                                            <td>Raj Sharma</td>
                                            <td></td>
                                            <!-- <td><button class="btn btn-pink btn-sm">Create</button></td> -->
                                            <td> <b class="text-secondary"> No Show </b></td>
                                        </tr>
                                        <tr>
                                            <td>10:20 AM, 10/31/2020</td>
                                            <td>Rohit Verma</td>
                                            <td>Hair Cutting</td>
                                            <td>Raj Sharma</td>
                                            <td></td>
                                            <!-- <td><button class="btn btn-pink btn-sm">Create</button></td> -->
                                            <td> <b class="text-danger"> Cancelled</b></td>
                                        </tr>
                                        <tr>
                                            <td>10:20 AM, 10/31/2020</td>
                                            <td>Rohit Verma</td>
                                            <td>Hair Cutting</td>
                                            <td>Raj Sharma</td>
                                            <td></td>
                                            <!-- <td><button class="btn btn-pink btn-sm">Create</button></td> -->
                                            <td> <b class="text-info"> Approved </b></td>
                                        </tr>
                                        <tr>
                                            <td>10:20 AM, 10/31/2020</td>
                                            <td>Rohit Verma</td>
                                            <td>Hair Cutting</td>
                                            <td>Raj Sharma</td>
                                            <td><button class="btn btn-pink btn-sm">Create</button></td>
                                            <td> <b class="text-success"> Completed </b></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<script src="assets/highslide/highslide-with-gallery.js"></script>

<script src="assets/js//Chart.min.js"></script>
<script src="assets/js/utils.js"></script>

<script>
    var randomScalingFactor = function() {
        // return Math.round(Math.random() * 100);
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [8, 10, 12, 14, 16],
                backgroundColor: [
                    window.chartColors.yellow,
                    window.chartColors.orange,
                    window.chartColors.red,
                    window.chartColors.blue,
                    window.chartColors.green,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Scheduled',
                'No Show',
                'Cancelled',
                'Approved',
                'Completed'
            ]
        },
        options: {
            responsive: true
        }
    };

    window.onload = function() {
        var ctx = document.getElementById('chart-area').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };



    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };

        for (var index = 0; index < config.data.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());

            var colorName = colorNames[index % colorNames.length];
            var newColor = window.chartColors[colorName];
            newDataset.backgroundColor.push(newColor);
        }

        config.data.datasets.push(newDataset);
        window.myPie.update();
    });
</script>

