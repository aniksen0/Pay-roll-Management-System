<?=$this->extend("layouts/basefile"); ?>
<?= $this->section("main")?>
<div class="container">

    <div class="form col-sm-11">
        <?php
        if (isset($validation)):?>
            <?=$validation->listErrors();?>
        <?php endif;?>

            <div class="text-center">
                <h1>Register</h1>
                <p>Follow SYSTEM POLICY AND ROLE.</p>
            </div>

        <strong> <p style="background-color: green" class="col colsm-12 text-center">
            <?php
            if (isset($success)):?>
                <?=$success;?>
            <?php endif;?>

            <?php
            if (isset($error)):?>
                <?=$error;?>
            <?php endif;?>
        </p>
        </strong>
        <hr>
        <?=form_open()?>
            <div class="form-row">

                <div class="col-sm-4">
                    <label for="id"><b>ID:</b></label>
                    <input class="input form-control" type="text" size="20" maxlength="10" placeholder="eg: EMP_1001" name="id" id="id" required>
                </div>

                <div class="col-sm-4">
                    <label for="name" ><b>Name:</b></label>
                    <input class="input form-control" type="text" size="25" placeholder="Enter Name" name="name" id="name" required>
                </div>
                <div class="col-sm-4">
                    <label for="email" ><b>Email:</b></label>
                    <input class="input form-control" type="text" size="25" placeholder="Enter Email" name="email" id="email" required>
                </div>
            </div>


            <div class="col-sm-12">
                <hr>
                <label for="file">Employee Image</label>
                <input type="file" id="file" name="file1" value="">
                <p style="color: indianred;">File size should be less than 1MB</p>
                <hr>
            </div>
            <div class="form-row">

                <div class="col-sm-4">
                    <label for="psw"><b>Password:</b></label>
                    <input class="input form-control" type="password" size="25" placeholder="Enter one time Password" name="password" id="psw" required>
                </div>
                <div class="col-sm-4">
                    <label for="cpw"><b>Password:</b></label>
                    <input class="input form-control" type="password" size="25" placeholder="Please enter password again" name="cpw" id="cpw" required>
                </div>
                <div class="col-sm-4">
                    <label for="mobile" ><b>Mobile:</b></label>
                    <input class="input form-control" type="text" size="25" placeholder="EG:017********" name="mobile" id="mobile" required>

                </div>
                <div class="col-sm-4">
                    <label for="address" ><b>address:</b></label>
                    <input class="input form-control" type="text" size="25" placeholder="Current Address" name="address" id="address" required>

                </div>
            </div>
            <br>
            <br>

            <div class="form-row row">
                <p> <strong> Basic Info </strong> </p>
                <div class="col-sm-3">
                    <label for="f_name"><b>Father Name:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Father Name" name="f_name" id="f_name" required>
                </div>
                <div class="col-sm-3">
                    <label for="m_name"><b>Mother Name:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Mother Name" name="m_name" id="m_name" required>
                </div>
                <div class="col-sm-3">
                    <label for="gender"><b>Gender:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Gender: eg- M or F" name="gender" id="gender" required>
                </div>
                <div class="col-sm-3">
                    <label for="nationality"><b>Nationality:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="nationality: eg: Bangladeshi" name="nationality" id="nationality" required>
                </div>
                <div class="col-sm-3">
                    <label for="blood"><b>Blood Group: </b></label>
                    <select class="input form-control"  id="blood" size="1"  name="blood">

                        <option value="" selected>Select Blood Group</option>
                        <option value="AN">A-</option>
                        <option value="AP" >A+</option>
                        <option value="OP" >O+</option>
                        <option value="ON" >O-</option>
                        <option value="ABP" >AB+</option>
                        <option value="ABN" >AB-</option>
                        <option value="BN" >B-</option>
                        <option value="BP" >B+</option>

                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="Mc"><b>Attendance Machine Code</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Machine Code: eg: ml_1011" name="amc" id="Mc" required>
                </div>
                <div class="col-sm-3">
                    <label for="dob"><b>Date of Birth</b></label>
                    <input class="input form-control" type="date" size="15" placeholder="DOB" name="dob" id="dob" required>
                </div>
            </div>
            <hr>
            <div class="form-row row">
                <p><strong><u> Employment Info </u></strong> </p>
                <div class="col-sm-3">
                    <label for="Department"><b>Department:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Department: eg: HR/Accounts" name="dept" id="Department" required>
                </div>
                <div class="col-sm-3">
                    <label for="division"><b>Division:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Division:" name="div" id="division" required>
                </div>
                <div class="col-sm-3">
                    <label for="Branch"><b>Branch:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Branch" name="branch" id="Branch" required>
                </div>
                <div class="col-sm-3">
                    <label for="Designation"><b>Designation:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Designation:eg:CTO CEO" name="designation" id="Designation" required>
                </div>
                <div class="col-sm-3">
                    <label for="JOD"><b>Joining date:</b></label>
                    <input class="input form-control" type="date" size="15" placeholder="Joining Date" name="jod" id="JOD" required>
                </div>
                <div class="col-sm-3">
                    <label for="LCD"><b>Labor Contract date:</b></label>
                    <input class="input form-control" type="date" size="15" placeholder="Labor Contact Date" name="lcd" id="LCD" required>
                </div>
                <div class="col-sm-3">
                    <label for="agreement_date"><b>Agreementdate Date:</b></label>
                    <input class="input form-control" type="date" size="15" placeholder="agreement_date" name="AGD" id="agreement_date" required>
                </div>
                <div class="col-sm-3">
                    <label for="VS"><b>Visa Status:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Visa_Status" name="visa_status" id="VS" required>
                </div>

                <div class="col-sm-3">
                    <label for="wh"><b>Working Hours:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Working Hours" name="wh" id="wh" required>
                </div>
                <div class="col-sm-3">
                    <label for="OT"><b>Over Time:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Over Time" name="ot" id="OT" required>
                </div>
                <div class="col-sm-3">
                    <label for="emp_eligibility"><b>emp_eligibility:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="emp_eligibility" name="eligibility" id="emp_eligibility" required>
                </div>
            </div>
            <hr>
            <div class="form-row row">
                <div class="col-sm-6 form-content">

                    <label for="role">Place a job role:</label>
                    <select class="input form-control"  id="role" size="1"  name="role">
                        <option value="3" disabled>System Admin</option>
                        <option value="2" >Human Resource Management(HR)</option>
                        <option value="1" selected>Employee</option>
                    </select>
                    <hr>
                </div>

                <div class="col-sm-5">
                    <label for="date"><b>Joining Date:</b></label>
                    <input class="input form-control" type="date" size="25" placeholder="Enter date" name="jod" id="date" required>
                    <hr>
                </div>
            </div>
            <br>
            <div class="col-sm-12">
                <label for="ec"><b>Emergency Contact No:</b></label>
                <input class="input form-control" type="text" placeholder="Contact no" name="ec" id="ec" required>
                <br>
                <hr>
            </div>
            <hr>
            <div class=" text-center col-sm-12 col-12">
                <p>Please provide all the information and follow <a href="#">Rules and Regulationsy</a>.</p>
                <button type="submit" class=" btnreg btn btn-success">Register</button>
            </div>
                <hr>

        <?=form_close() ?>
    </div>
</div>
<?= $this->endSection();?>
