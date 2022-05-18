<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <title>Book My Makeup</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    </head>

    <body>

        <section class="user-manage-profile">
            <div class="container">
                <div class="row">
                    <?php include_once './user/sidebar.php'; ?>
                    <div class="col-md-9">
                        <div class="manage-user-icon">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="h2-heading">Events</h2>

                                        <div class="table-responsive user-event">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Event Name</th>
                                                        <th>Date &amp; Time</th>
                                                        <th>Venue</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>BMM Event</td>
                                                        <td>11 AM, 1/1/2021</td>
                                                        <td>Janakpuri Delhi</td>
                                                        <td><a href="#" class="btn btn-pink btn-sm">Book Now</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>BMM Event</td>
                                                        <td>11 AM, 1/1/2021</td>
                                                        <td>Janakpuri Delhi</td>
                                                        <td><a href="#" class="btn btn-pink btn-sm">Book Now</a></td>
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

        <script type="text/javascript" src="assets/js/popper.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/popper.min.js"></script>
        <script type="text/javascript" src="assets/js/fontAwesome.js"></script>
        <script type="text/javascript" src="assets/js//Chart.min.js"></script></body>
    <script src="assets/highslide/highslide-with-gallery.js"></script>

</html>