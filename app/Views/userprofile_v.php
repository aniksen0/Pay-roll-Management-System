<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheeet" href="<?=base_url();?>/public/Assets/boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/public/Assets/css/userprofilecss.css" >
    <link rel="stylesheet" href="<?=base_url();?>/public/Assets/css/mainStyle.css" >
    <title>User Profile|Payroll Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<?php if(session()->getTempdata('success')):?>
    <div class="alert alert-success"> <?=session()->getTempdata("success");?> </div>
    <?=session()->removeTempdata('success');?>
<?php endif; ?>
<?php if(session()->getTempdata('error')):?>
    <div class="alert alert-danger"> <?=session()->getTempdata("error");?> </div>
    <?=session()->removeTempdata('error');?>
<?php endif; ?>
<div class="container border">
    <br>
    <br>
    <br>
    <div class="col col-sm-12 alert alert-danger"> Profile of <?=$emp_info['emp_name']?> <a class="float-right" style="text-decoration: none; background-color: indianred;color: #9fcdff" href="<?=base_url();?>/logout"><button style="background-color: indianred" id="btn btn-alert" type="submit"> Log-Out</button></a> </div>
    <div class="row mt-5 mb-5">

        <div class="col-12 col-sm-6 ">
            <form action="<?= base_url("/attendance/automaticAttendance/")?>" method="post">
                <div class="form-row row">
                    <input type="hidden" name="emp_id" value="<?=$emp_info['emp_id']?>">
                    <button class="btn btn-info">ATTENDENCE</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-sm-6">
            <form action="<?= base_url("/attendance/automaticAttendanceUpdate/".$emp_info['emp_id'])?>" method="post">
                <div class="form-row row">
                    <input type="hidden" name="demo">
                    <button class="btn btn-danger">LEAVE</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?=$emp_info['emp_designation']?></h4>
                                <p class="text-secondary mb-1"><?=$emp_info['emp_name']?></p>
                                <p class="text-muted font-size-sm"><?=$emp_info['emp_address']?></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Nationality</h6>
                            <span class="text-secondary"><?=$emp_info['emp_nationality']?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Date Of Birth</h6>
                            <span class="text-secondary"><?=$emp_info['emp_dob']?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Father Name</h6>
                            <span class="text-secondary"><?=$emp_info['emp_father_name']?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Mother Name</h6>
                               <span class="text-secondary"><?=$emp_info['emp_motherName']?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6>Working Hour </h6>
                               <span class="text-secondary"><?=$emp_info['emp_blood_group']?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Over Time</h6>
                             <span class="text-secondary"><?=$emp_info['emp_over_time']?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?=$emp_info['emp_name']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?=$emp_info['emp_email']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                +880- <?=$emp_info['emp_contact_number']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">emergency Number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                +880- <?=$emp_info['emp_local_contact_number']?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Local-Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?=$emp_info['emp_local_address']?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-sm">
                    <div class="col-sm-5 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6>Employment Info:</h6>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Designation: </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <?=$emp_info['emp_designation']?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Branch: </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <?=$emp_info['emp_branch']?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Department: </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <?=$emp_info['emp_department']?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Joining Date: </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <?=$emp_info['emp_joining_date']?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Agreement Date: </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <?=$emp_info['emp_joining_date']?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Joining Date: </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <?=$emp_info['emp_joining_date']?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Visa Status: </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <?=$emp_info['emp_visa_status']?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Machine Code: </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <span class="text-secondary"><?=$emp_info['emp_attendance_machine_code']?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card col-12 col-sm-5">
                        <h5>Salary Info:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6>Machine Code:</h6>
                                <span class="text-secondary"><?=$emp_info['emp_attendance_machine_code']?></span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</html>