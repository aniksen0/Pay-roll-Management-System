<?=$this->extend("layouts/basefile"); ?>
<?= $this->section("main")?>
<div class="container">

    <div class="form col-sm-11">


        <div class="text-center">
            <h1>Add Salary Info</h1>
            <span style="background-color: green" class="col colsm-12 text-center">

                <?php if(session()->getTempdata('success')):?>
                    <div class="alert alert-danger"> <?=session()->getTempdata("success");?> </div>
                <?php endif; ?>

                <?php if(session()->getTempdata('error')):?>
                    <div class="alert alert-danger"> <?=session()->getTempdata("error");?> </div>
                <?php endif; ?>
            </span>

        </div>


        <hr>

        <form action="<?= base_url("/attendance/updateattendance/".$attendance_value['uiid'])?>" method="post" id="form">

            <div class="form-row row">
                <p> <strong> Info </strong> </p>
                <div class="col-sm-3">
                    <label for="basics"><b>Employee id:</b></label>
                    <input class="input form-control" type="text" value="<?=$attendance_value["emp_id"]?>" size="15"readonly placeholder="Employee Basic Salary:" name="emp_id" id="basics" required>
                </div>
                <div class="col-sm-3">
                    <label for="empA"><b>Attendance Date</b></label>
                    <input class="input form-control" readonly type="text" size="15" value="<?=$attendance_value["attendance_date"]?>" placeholder="Employee Allowances" name="attendance_date" id="empA" required>
                </div>
                <div class="col-sm-3">
                    <input class="input form-control" readonly type="hidden" size="15" value="<?=$attendance_value["uiid"]?>" placeholder="Employee Allowances" name="uiid" id="empA1" required>
                </div>
                <div class="col-sm-3">
                    <label for="esr"><b>Status</b></label>
                    <select id="esr" name="status1">
                        <option value="1" <?php if ($attendance_value['status1']==1): ?>
                            <?="selected";?>
                        <?php endif; ?>>On-Leave</option>
                        <option value="2" <?php if ($attendance_value['status1']==2): ?>
                            <?="selected";?>
                        <?php endif; ?>>half_day</option>
                        <option value="3" <?php if ($attendance_value['status1']==3): ?>
                            <?="selected";?>
                        <?php endif; ?>>Present</option>
                        <option value="4" <?php if ($attendance_value['status1']==4): ?>
                            <?="selected";?>
                        <?php endif; ?>>Absent</option>
                    </select>
                       </div>

            </div>
            <hr>
            <div class="form-row row">
                <div class="col-sm-3">
                    <label for="eq"><b>Comments:</b></label>
                    <textarea rows="4" cols="50" name="comments" form="form"> <?=$attendance_value["comments"]?></textarea>
                </div>
            </div>
            <hr>
            <div class="form-row row">
                <p> <strong> Info </strong> </p>
                <div class="col-sm-3">
                    <label for="etr"><b>Time In:</b></label>
                    <input class="input form-control" type="datetime" size="15" value="<?=$attendance_value["time_in"]?>"  placeholder="Time In" name="time_in" id="etr" required>
                </div>
                <div class="col-sm-3">
                    <label for="eba"><b>Time Out:</b></label>
                    <input class="input form-control" type="datetime" size="15" value="<?=$attendance_value["time_out"]?>" placeholder="Time Out" name="time_out" id="eba" required>
                </div>
                <div class="col-sm-3">
                    <label for="ebn"><b>Over-Time</b></label>
                    <input class="input form-control" type="text" size="15" value="<?=$attendance_value["overtime"]?>" placeholder="OverTime" name="overtime" id="ebn" required>
                </div>

            </div>
            <button type="submit" name="submit" class="btn btn-info mt-5">Update</button>
        </form>
    </div>
</div>
<?= $this->endSection();?>
