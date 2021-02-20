<?=$this->extend("layouts/basefile"); ?>
<?= $this->section("main")?>
    <div class="container">

        <div class="form col-sm-11">


            <div class="text-center">
                <h1>Add Attemdance Data</h1>
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


            <form action=" <?= base_url("/attendance/ManualAttendance/")?>" method="post" id="form">

                <div class="form-row row">
                    <span> <strong> Info </strong> </span>
                    <div class="col-sm-3">
                        <label for="basics"><b>Employee id:</b></label>
                        <select name="emp_id">
                                <?php foreach ($emp_info as $emp):?>
                                    <option value=<?=$emp["emp_id"]?>><?=$emp["emp_name"]?> </option>
                                <?php endforeach;?>
                        </select>
                         </div>
                    <div class="col-sm-3">
                        <label for="empA"><b>Attendance Date</b></label>
                        <input class="input form-control" type="date" size="15"  name="attendance_date" id="empA" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="esr"><b>Status</b></label>
                        <select id="esr" name="status1">
                            <option value="1" >On-Leave</option>
                            <option value="2" >half_day</option>
                            <option value="3" >Present</option>
                            <option value="4" >Absent</option>
                        </select>
                    </div>
                </div>

                <hr>
                <div class="form-row row">
                    <div class="col-sm-3">
                        <label for="eq"><b>Comments:</b></label>
                        <textarea rows="4" cols="50" name="comments" form="form"></textarea>
                    </div>
                </div>
                <hr>
                <div class="form-row row">
                    <p> <strong> Info </strong> </p>
                    <div class="col-sm-3">
                        <label for="etr"><b>Time In:</b></label>
                        <input class="input form-control" type="datetime-local" size="15"   placeholder="Time In" name="time_in" id="etr" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="eba"><b>Time Out:</b></label>
                        <input class="input form-control" type="datetime-local" size="15" placeholder="Time Out" name="time_out" id="eba" required>
                    </div>


                </div>
                <button type="submit" name="submit" class="btn btn-info mt-5">Update</button>
            </form>
        </div>
    </div>
<?= $this->endSection();?>