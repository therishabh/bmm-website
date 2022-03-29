<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book My Makeup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- google fonts -->
    <link rel="stylesheet" href="./includes/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./includes/css/jquery.toast.css">
    <link rel="stylesheet" href="./includes/css/zoom.css">
    <link rel="stylesheet" href="./includes/css/components.css">
    <link rel="stylesheet" href="./includes/css/style.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header-wrap">
            <div class="logo-wrapper">
                <a href="dashboard.php">
                    <img src="./includes/img/logo.png" alt="logo">
                </a>
            </div>
            <div class="user-info-wrapper">
                <div class="salon-name" id="headerSalonName">Geetanjali Salon</div>
                <div class="logout-btn">
                    <button onclick="logout();">Logout</button>
                </div>
            </div>
        </div>
    </header>