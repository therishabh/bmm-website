<header>
    <style>
        .header-wrap {
            display: flex;
            justify-content: space-between;
            padding: 25px;
        }

        .user-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 200px);
        }
    </style>
    <div class="header-wrap">
        <div class="logo-wrapper">
            <a href="dashboard.php">
                <img src="./includes/img/logo.png" alt="logo">
            </a>
        </div>
        <div class="user-info-wrapper">
            <div class="salon-name" id="headerSalonName"></div>
            <div class="logout-btn">
                <button onclick="logout();">Logout</button>
            </div>
        </div>
    </div>
    <div class="user-container">
        <h1>Welcome to User Dashboard</h1>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script>
    function logout() {
        localStorage.removeItem("userToken");
        // $.toast({
        //     heading: "Logout Successfully",
        //     showHideTransition: "slide",
        //     icon: "success",
        //     bgColor: "#179756",
        // });
        setTimeout(function() {
            window.location.replace("../");
        }, 1000);
    }
</script>