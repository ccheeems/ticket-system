<?php
include '../template/adminTemp/adminHeader.php';
?>

<main class="dash-content">
                <div class="container-fluid">
                    <div class="row dash-row">
                        <div class="col-lg-3 col-sm-6 col-12 d-flex">
                            <div class="dash-count">
                                <div class="dash-counts">
                                        <h4>100</h4>
                                        <h5>Total Tickets</h5>
                                </div>
                                <div class="dash-imgs">
                                    <i class="fa-solid fa-ticket"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12 d-flex">
                            <div class="dash-count das1">
                                    <div class="dash-counts">
                                        <h4>100</h4>
                                        <h5>Total Departments</h5>
                                </div>
                                <div class="dash-imgs">
                                    <i class="fa-solid fa-building-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12 d-flex">
                            <div class="dash-count das2">
                                <div class="dash-counts">
                                    <h4>100</h4>
                                    <h5>Total Customers</h5>
                                </div>
                                <div class="dash-imgs">
                                    <i class="fa-solid fa-user-group"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12 d-flex">
                            <div class="dash-count das3">
                                <div class="dash-counts">
                                    <h4>105</h4>
                                    <h5>Total Agents</h5>
                                </div>
                                <div class="dash-imgs">
                                    <i class="fa-solid fa-users-gear"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="easion-card-title"> Bar Chart </div>
                                    <div class="easion-card-menu">
                                        <div class="btn-group dropstart show">
                                            <a class="easion-card-menu-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body easion-card-body-chart">
                                    <canvas id="easionChartjsBar"></canvas>
                                    <script>
                                        var ctx = document.getElementById("easionChartjsBar").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                                                datasets: [{
                                                    label: 'Tickets',
                                                    data: [12, 19, 3, 5, 2],
                                                    backgroundColor: window.chartColors.warning,
                                                    borderColor: 'transparent'
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="easion-card-title"> Notifications </div>
                                </div>
                                <div class="card-body ">
                                    <div class="notifications">
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fa-solid fa-ticket-simple"></i>
                                            </div>
                                            <div class="notification-text">New ticket arrived</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fa-solid fa-ticket-simple"></i>
                                            </div>
                                            <div class="notification-text">New ticket arrived</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fa-solid fa-ticket-simple"></i>
                                            </div>
                                            <div class="notification-text">New ticket arrived</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fa-solid fa-ticket-simple"></i>
                                            </div>
                                            <div class="notification-text">New ticket arrived</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fa-solid fa-ticket-simple"></i>
                                            </div>
                                            <div class="notification-text">New ticket arrived</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <div class="notifications-show-all">
                                            <a href="#!">Show all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

<!-- Continuation of Header -->
     </div>
</div>

<?php
include '../template/adminTemp/adminFooter.php';
?>