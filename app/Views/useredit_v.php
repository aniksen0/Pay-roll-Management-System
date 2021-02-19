<?=$this->extend("layouts/basefile")?>
<?= $this->section("main")?>
<div class="container">


        <div class="row">
            <div class="col-12 col-sm-12"
            <?php if(session()->getTempdata('success')):?>
                <div class="alert alert-success"><?=session()->getTempdata("success");?></div>
            <?php endif; ?>
            <?php if(session()->getTempdata('error')):?>
                <div class="alert alert-danger"><?=session()->getTempdata("error");?></div>
            <?php endif; ?>
        </div>

            <div class="form col-sm-11">
                <?php
                if (isset($validation)):?>
                    <?=$validation->listErrors();?>
                <?php endif;?>
    
                <div class="text-center">
                    <h1>Upadate Info</h1>
                    <p>Follow SYSTEM POLICY AND ROLE.</p>
                </div>


                <strong style="background-color: green" class="col colsm-12 text-center">
                        <?php
                        if (isset($success)):?>
                            <?=$success;?>
                        <?php endif;?>

                        <?php
                        if (isset($error)):?>
                            <?=$error;?>
                        <?php endif;?>

                </strong>
                <hr>
               <form action="<?= base_url("dashboard/userupdate/".$employee['emp_id'])?>" method="post">
                <div class="form-row">

                    <div class="col-sm-4">
                        <label for="id"><b>Update ID:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_id']?>" type="text" size="20" maxlength="10" placeholder="eg: EMP_1001" name="id" id="id" required>
                    </div>

                    <div class="col-sm-4">
                        <label for="name" ><b>Update Name:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_name']?>" type="text" size="25" placeholder="Enter Name" name="name" id="name" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="email" ><b>Update Email:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_email']?>" type="text" size="25" placeholder="Enter Email" name="email" id="email" required>
                    </div>
                </div>


                <div class="col-sm-12">
                    <hr>
                    <label for="file">Update Employee Image</label>
                    <input type="file" id="file" name="file1" value="">
                    <p style="color: indianred;">File size should be less than 1MB</p>
                    <hr>
                </div>

                <div class="form-row row">

                    <div class="col-sm-4">
                        <label for="mobile" ><b>Update Mobile:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_contact_number']?>" type="text" size="25" placeholder="EG:017********" name="mobile" id="mobile" required>

                    </div>
                    <div class="col-sm-4">
                        <label for="address" ><b>Update address:</b></label>
                        <input class="input form-control" type="text" value="<?=$employee['emp_local_address']?>" size="25" placeholder="Current Address" name="address" id="address" required>

                    </div>
                    <div class="col-sm-4">
                        <label for="address1" ><b>Update Address Overseas:</b></label>
                        <input class="input form-control" type="text" value="<?=$employee['emp_address_overseas']?>" size="25" placeholder="Current Address" name="emp_address_overseas" id="address1" required>

                    </div>
                </div>
                <br>
                <br>

                <div class="form-row row form-content">
                        <p> <strong> Basic Info </strong> </p>
                        <div class="col-sm-3">
                            <label for="f_name"><b>Update Father Name:</b></label>
                            <input class="input form-control" type="text" value="<?=$employee['emp_father_name']?>" size="15" placeholder="Father Name" name="f_name" id="f_name" required>
                        </div>
                        <div class="col-sm-3">
                            <label for="m_name"><b>Update Mother Name:</b></label>
                            <input class="input form-control" type="text" value="<?=$employee['emp_motherName']?>" size="15" placeholder="Mother Name" name="m_name" id="m_name" required>
                        </div>
                        <div class="col-sm-3">
                            <label for="gender"><b>Update Gender:</b></label>
                            <select class="input form-control"  id="gender" size="1"  name="gender">

                                        <option value="" selected>Select Gender</option>
                                        <option value="M" <?php if ($employee['emp_gender']=="M"): ?>
                                        <?="selected";?>
                                            <?php endif; ?>
                                        >Male</option>
                                        <option value="F" <?php if ($employee['emp_gender']=="F"): ?>
                                            <?="selected";?>
                                        <?php endif; ?> >Female</option>
                                </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="nationality"><b>Update Nationality:</b></label>
                            <input class="input form-control" value="<?=$employee['emp_nationality']?>" type="text" size="15" placeholder="nationality: eg: Bangladeshi" name="nationality" id="nationality" required>
                        </div>
                        <div class="col-sm-3">
                            <label for="blood"><b>Update Blood Group: </b></label>
                            <select class="input form-control"  id="blood" size="1"  name="blood">

                                <option value="" selected>Select Blood Group</option>
                                <option value="AN" <?php if ($employee['emp_blood_group']=="AN"): ?>
                                    <?="selected";?>
                                <?php endif; ?>
                                >A-</option>
                                <option value="AP" <?php if ($employee['emp_blood_group']=="AP"): ?>
                                    <?="selected";?>
                                <?php endif; ?>>A+</option>
                                <option value="OP"<?php if ($employee['emp_blood_group']=="OP"): ?>
                                    <?="selected";?>
                                <?php endif; ?> >O+</option>
                                <option value="ON"<?php if ($employee['emp_blood_group']=="ON"): ?>
                                    <?="selected";?>
                                <?php endif; ?> >O-</option>
                                <option value="ABP"<?php if ($employee['emp_blood_group']=="ABP"): ?>
                                    <?="selected";?>
                                <?php endif; ?> >AB+</option>
                                <option value="ABN"<?php if ($employee['emp_blood_group']=="ABN"): ?>
                                    <?="selected";?>
                                <?php endif; ?> >AB-</option>
                                <option value="BN"<?php if ($employee['emp_blood_group']=="BN"): ?>
                                    <?="selected";?>
                                <?php endif; ?> >B-</option>
                                <option value="BP" <?php if ($employee['emp_blood_group']=="BP"): ?>
                                    <?="selected";?>
                                <?php endif; ?>>B+</option>

                            </select>
                        </div>
                    </div>
                <div class="row form content">
                    <div class="col-sm-3">
                        <label for="Mc"><b>Update Attendance Machine Code</b></label>
                        <input class="input form-control" value="<?=$employee['emp_attendance_machine_code']?>" type="text" size="15" placeholder="Machine Code: eg: ml_1011" name="amc" id="Mc" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="dob"><b>Update Date of Birth</b></label>
                        <input class="input form-control" value="<?=$employee['emp_dob']?>" type="date" size="15" placeholder="DOB" name="dob" id="dob" required>
                    </div>
                </div>
                <hr>
                <div class="form-row row">
                    <p><strong>Update  Employment Info</strong> </p>
                    <div class="col-sm-3">
                        <label for="Department"><b>Department:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_department']?> " type="text" size="15" placeholder="Department: eg: HR/Accounts" name="dept" id="Department" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="division"><b>Update Division:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_division']?>" type="text" size="15" placeholder="Division:" name="div" id="division" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="Branch"><b>Update Branch:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_branch']?>" type="text" size="15" placeholder="Branch" name="branch" id="Branch" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="Designation"><b>Update Designation:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_designation']?>" type="text" size="15" placeholder="Designation:eg:CTO CEO" name="designation" id="Designation" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="JOD"><b>Update Joining date:</b></label>
                        <input class="input form-control"  type="date" size="15" placeholder="Joining Date" name="jod" value="<?=$employee['emp_joining_date']?>" id="JOD" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="LCD"><b>Update Labor Contract date:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_labor_contract_type']?>" type="date" size="15" placeholder="Labor Contact Date" name="lcd" id="LCD" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="agreement_date"><b>Update Agreementdate Date:</b></label>
                        <input class="input form-control"  type="date" size="15" placeholder="agreement_date" value="<?=$employee['emp_agreement_date']?>" name="AGD" id="agreement_date" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="VS"><b>Update Visa Status:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_visa_status']?>" type="text" size="15" placeholder="Visa_Status" name="visa_status" id="VS" required>
                    </div>

                    <div class="col-sm-3">
                        <label for="wh"><b>Update Working Hours:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_working_hours']?>" type="text" size="15" placeholder="Working Hours" name="wh" id="wh" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="OT"><b>Update Over Time:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_over_time']?>" type="text" size="15" placeholder="Over Time" name="ot" id="OT" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="emp_eligibility"><b>Update emp_eligibility:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_eligibility']?> " type="text" size="15" placeholder="emp_eligibility" name="eligibility" id="emp_eligibility" required>
                    </div>
                </div>
                <hr>
                <div class="form-row row">
                    <div class="col-sm-4 form-content">

                        <label for="role">Update Place a job role:</label>
                        <select class="input form-control"  id="role" size="1"  name="role">
                            <option value="3" <?php if ($employee['emp_role']==3): ?>
                                <?="selected";?>
                            <?php endif; ?> disabled>System Admin</option>
                            <option value="2" <?php if ($employee['emp_role']==2): ?>
                                <?="selected";?>
                            <?php endif; ?> >Human Resource Management(HR)</option>
                            <option value="1" <?php if ($employee['emp_role']==3): ?>
                                <?="selected";?>
                            <?php endif; ?>>Employee</option>
                        </select>
                        <hr>
                    </div>

                    <div class="col-sm-4 form-content">
                        <label for="date"><b>Update Joining Date:</b></label>
                        <input class="input form-control" value="<?=$employee['emp_joining_date']?>" type="date" size="25" placeholder="Enter date" name="jod" id="date" required>
                        <hr>
                    </div>
                    <div class="col-sm-4 form-content">

                        <label for="status">Update status:</label>
                        <select class="input form-control"  id="role" size="1"  name="status">
                            <option value="active" <?php if ($employee['status']=="active"): ?>
                                <?="selected";?>
                            <?php endif; ?>> Active</option>
                            <option value="inactivate" <?php if ($employee['status']=="deactivate"): ?>
                                <?="selected";?>
                            <?php endif; ?> >inactive</option>
                        </select>
                        <hr>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 form-content">
                        <label for="ec"><b>Update Emergency Contact No:</b></label>
                        <input class="input form-control" type="text" value="<?=$employee['emp_emergency_cn']?>" placeholder="Emergency Contact no" name="ec" id="ec" required>
                        <br>
                        <hr>
                    </div>
                    <div class="col-sm-4 form-content">
                        <label for="jobtypes"><b>Job Types</b></label>
                        <select class="input form-control"  id="jobtypes" size="1"  name="jobtypes">
                            <option value="1" <?php if ($employee['jobtypes']==1): ?>
                                <?="selected";?>
                            <?php endif; ?>> Contractual</option>
                            <option value="2" <?php if ($employee['jobtypes']==2): ?>
                                <?="selected";?>
                            <?php endif; ?>> Hourley</option>
                            <option value="3" <?php if ($employee['jobtypes']==3): ?>
                                <?="selected";?>
                            <?php endif; ?>> Monthly</option>
                            <option value="4" <?php if ($employee['jobtypes']==4): ?>
                                <?="selected";?>
                            <?php endif; ?>> Part-time</option>
                        </select>

                        <hr>
                    </div>
                    <div class="col-sm-4 form-content">
                        <label for="ec"><b>Update Emergency Contact No:</b></label>
                        <input class="input form-control" type="text" value="<?=$employee['emp_emergency_cn']?>" placeholder="Emergency Contact no" name="ec" id="ec" required>
                        <br>
                        <hr>
                    </div>
                </div>
                <hr>
                <div class=" text-center col-sm-12 col-12 ">
                    <p>Please provide all the information and follow <a href="#">Rules and Regulationsy</a>.</p>
                    <button type="submit" class="mb-5 btnreg btn btn-info">Update</button>
                </div>
                <hr>

               </form>
            </div>
        </div>

    <?= $this->endSection();?>


