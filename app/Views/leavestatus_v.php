<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?=base_url();?>/public/Assets/css/font/css/all.min.css"crossorigin="anonymous">

    <link rel="stylesheeet" href="<?=base_url();?>/public/Assets/boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/public/Assets/css/mainSidebar.css" >
    <link rel="stylesheet" href="<?=base_url();?>/public/Assets/css/mainStyle.css" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Payroll Management Dashboard</title>
</head>
<body id="body">
<div class="container1">
    <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>

        <div class="navbar--right d-flex justify-content-center align-items-center">
            <img src="<?=base_url();?>/public/Assets/img/prms.png" alt="mainlogo" id="farleft" height="50px" width="50px" />
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fas fa-search"></i></button>


            <!--            <a href="#">-->
            <!--                <i class="fas fa-clock" aria-hidden="true"></i>-->
            <!--            </a>-->
            <!--lagbena-->

            <a href="#">
                <img width="30" src="<?=base_url();?>/public/Assets/img/avatar.jpg" alt="LoginPerson's img" />
                <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
            </a>
        </div>
    </nav>

    <main>
        <div class="card">

            <div class="card-body">

            </div>
        </div>
        <div class="container">
            <div class="main--cards">
                <div class="card">
                    <i class="fas fa-running"></i>
                    <div class="card_inner">
                        <p class="text-primary-p">Total Employee on leave</p>
                        <span class="font-bold text-title"><?=$totalleave['nai']?></span>
                    </div>
                </div>
                <div class="card">
                    <i class="fas fa-running"></i>
                    <div class="card_inner">
                        <p class="text-primary-p">Total Leave this <?=date('F')?></p>
                        <span class="font-bold text-title"><?=$leave['leavemonth']?></span>
                    </div>
                </div>
                <div class="card">
                    <i class="fas fa-running"></i>
                    <div class="card_inner">
                        <p class="text-primary-p">Total Sick/Half-day leave </p>
                        <span class="font-bold text-title"><?=$sick['sickmonth']?></span>
                    </div>
                </div>
                <div class="card">
                    <i class="fas fa-running"></i>
                    <div class="card_inner">
                        <p class="text-primary-p">Total Absent</p>
                        <span class="font-bold text-title"><?=$absent['absentmonth']?></span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <canvas id="myChart"></canvas>
                    </div>

                    <div class="col-12 col-sm-4">
                        <canvas id="myChart1"></canvas>
                    </div>

                    <div class="col-12 col-sm-4">
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
            <hr>

        </div>
    </main>

    <div id="sidebar">
        <div class="sidebar--title">
            <div class="sidebar--img">
                <img src="<?=base_url();?>/public/Assets/img/prms.png" style="border-radius: 35%" alt="logo" />
                <h1>Payroll Management System</h1>

            </div>
            <i
                onclick="closeSidebar()"
                class="fas fa-door-open"
                id="sidebarIcon"
                aria-hidden="true"
                style="color: indianred;"
            ></i>
        </div>
        <p>Relief Section</p>
        <div class="sidebar--menu">
            <a href="<?=base_url()?>/dashboard">
                <div class="sidebar--link active_menu_link">
                    <i class="fa fa-home"></i>
                    Overview
                </div>
            </a>

            <h2>View</h2>
            <a href="<?=base_url();?>/dashboard/userstatus">
                <div class="sidebar--link ">

                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                    Employee Status
                </div>
            </a>
            <div class="sidebar--link">
                <i class="fas fa-user-plus"></i>
                <a href="<?=base_url();?>/empRegistrationNew">Add Employee</a>
            </div>
            <div class="sidebar--link">
                <i class="fas fa-money-check-alt"></i>
                <a href="<?=base_url();?>/salary">Salary Info</a>
            </div>
            <div class="sidebar--link active">
                <i class="fas fa-concierge-bell"></i>
                <a href="<?=base_url();?>/attendance">Attendance History|Manual</a>
            </div>
            <div class="sidebar--link active">
                <i class="fas fa-concierge-bell"></i>
                <a href="<?=base_url();?>/leave">Leave</a>
            </div>
            <div class="sidebar--link active">
                <i class="fas fa-concierge-bell"></i>
                <a href="<?=base_url();?>/leave/leavestatus">Leave Status</a>
            </div>
            <div class="sidebar--link">
                <i class="fa fa-clock"></i>
                <a href="<?=base_url();?>/Worktime"">Work Time</a>
            </div>
            <h2>Loan</h2>
            <div class="sidebar--link">
                <i class="fas fa-pen"></i>
                <a href="#">Employee Loan Info</a>
            </div>
            <div class="sidebar--link">
                <i class="fas fa-balance-scale-right"></i>
                <a href="#">Update Loan</a>
            </div>
            <div class="sidebar--link">
                <i class="fas fa-strikethrough"></i>
                <a href="#">-----</a>
            </div>
            <!--            <div class="sidebar--link">-->
            <!--                <i class="fa fa-files-o"></i>-->
            <!--                <a href="#"></a>-->
            <!--            </div>-->
            <h2>Report</h2>
            <div class="sidebar--link">
                <i class="fas fa-cogs"></i>
                <a href="#">Generate Report</a>
            </div>
            <div class="sidebar--link">
                <i class="fas fa-flag-checkered"></i>
                <a href="#">Import Report</a>
            </div>
            <div class="sidebar--logout">
                <i class="fa fa-power-off"></i>
                <a href="<?=base_url();?>/logout">Log out</a>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <p>&copyright All rights reserved by ANIK SEN Please Don't copy.PET PROJECT </p>
    <a href="https://aniksen.000webhostapp.com/">My PortFolio</a>
</footer>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script defer src="<?=base_url();?>/public/Assets/css/font/js/all.js"></script>
<script src="<?=base_url();?>/public/Assets/css/boot/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var sidebarOpen = false;
    var sidebar = document.getElementById("sidebar");
    var sidebarCloseIcon = document.getElementById("sidebarIcon");

    function toggleSidebar() {
        if (!sidebarOpen) {
            sidebar.classList.add("sidebar_responsive");
            sidebarOpen = true;
        }
    }

    function closeSidebar() {
        if (sidebarOpen) {
            sidebar.classList.remove("sidebar_responsive");
            sidebarOpen = false;
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',

        // The data for our dataset
        data: {
            labels: ['Sick', 'Absent', 'Approved Leaves'],
            datasets: [{
                label: 'Ratio between sick absent and approved leave',
                backgroundColor: ['rgb(0, 200, 255)','rgb(0, 247, 255)','rgb(0, 128, 255)'],
                borderColor: 'rgb(0, 0, 0)',
                data: [<?=$sick['sickmonth']?>,<?=$absent['absentmonth']?>,<?=$leave['leavemonth']?>,]
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>
<script>
    var ctx = document.getElementById('myChart1').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['SICK', 'Leave'],
            datasets: [{
                label: 'Sick leave vs leave',
                backgroundColor: ['rgb(3, 255, 235)'],
                borderColor: ['rgb(3, 252, 140)'],
                data: [<?=$sick['sickmonth']?>,<?=$leave['leavemonth']?>]
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>
<script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',

        // The data for our dataset
        data: {
            labels: ['SICK', 'Leave'],
            datasets: [{
                label: 'Sick leave vs leave',
                backgroundColor: ['rgb(3, 252, 140)','rgb(55, 184, 132)'],
                borderColor: ['rgb(3, 252, 140)'],
                data: [<?=$sick['sickmonth']?>,<?=$leave['leavemonth']?>]
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>

<script>
    function sure()
    {
        alert("Do you really want to delete it?");
    }
</script


</body>
</html>




