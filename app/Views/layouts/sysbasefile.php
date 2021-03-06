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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Payroll Management Dashboard</title>
</head>
<body id="body">
<div class="container1">
    <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>

        <div class="navbar--right">
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
        <?= $this->renderSection('main'); ?>
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
                    System Overview
                </div>
            </a>

            <h2>Add HR</h2>
            <a href="<?=base_url();?>/sysadmin/addHr">
                <div class="sidebar--link ">
                    <i class="fa fa-user-secret" aria-hidden="true"></i> <strong> Add Hr</strong>
                </div>
            </a>

        </div>
    </div>
</div>
<footer id="footer">
    <p>&copyright All rights reserved by Astha IT solutions.2021</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script defer src="<?=base_url();?>/public/Assets/css/font/js/all.js"></script>
<script src="<?=base_url();?>/public/Assets/css/boot/js/bootstrap.min.js"></script>
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
</body>
</html>
