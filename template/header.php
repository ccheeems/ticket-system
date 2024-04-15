<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CUSTOM FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="template/css/easion.css">

    <title></title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="easion-logo"><i class="fa-solid fa-ticket"></i> <span>Ticketing</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="index.html" class="dash-nav-item">
                    <i class="fa-solid fa-gauge-high"></i> Dashboard </a>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fa-solid fa-ticket"></i> Ticket </a>
                    <div class="dash-nav-dropdown-menu">
                    <a href="chartjs.html" class="dash-nav-dropdown-item">Create Ticket</a>
                    </div>
                    <div class="dash-nav-dropdown-menu">
                        <a href="chartjs.html" class="dash-nav-dropdown-item">Ticket List</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fa-solid fa-user-group"></i> Client </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="cards.html" class="dash-nav-dropdown-item">Add Client</a>
                        <a href="forms.html" class="dash-nav-dropdown-item">Client List</a>
                        <!-- <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">Icons</a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="icons.html" class="dash-nav-dropdown-item">Solid Icons</a>
                                <a href="icons.html#regular-icons" class="dash-nav-dropdown-item">Regular Icons</a>
                                <a href="icons.html#brand-icons" class="dash-nav-dropdown-item">Brand Icons</a>
                            </div>
                        </div> -->
                        <!-- <a href="stats.html" class="dash-nav-dropdown-item">Stats</a> -->
                    </div>
                </div>
                <a href="index.html" class="dash-nav-item">
                    <i class="fa-solid fa-building-user"></i> Department </a>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fa-solid fa-users-gear"></i> Staff </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="#" target="_blank" class="dash-nav-dropdown-item">Add Staff</a>
                        <a href="#" target="_blank" class="dash-nav-dropdown-item">Staff List</a>
                    </div>
                </div>
                <a href="index.html" class="dash-nav-item">
                    <i class="fa-solid fa-user-gear"></i> Admin </a>
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <!-- <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form> -->
                <div class="tools">
                    <a href="#!" class="tools-item">
                        <i class="fas fa-bell"></i>
                        <i class="tools-item-count">5</i>
                    </a>
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">Profile</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </header>

    <!-- Template BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- CHARTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../template/js/chart-js-config.js"></script>

    <!-- CUSTOM JS -->
    <script src="template/js/easion.js"></script>

     </body>

</html>