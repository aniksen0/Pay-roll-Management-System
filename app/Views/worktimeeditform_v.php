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

            <form action="<?= base_url("/worktime/updateworktime/".$emp_info['emp_id'])?>" method="post" id="form">

                <div class="form-row row">
                    <p> <strong> Info </strong> </p>
                    <div class="col-sm-3">
                        <label for="basics"><b>Employee id:</b></label>
                        <input class="input form-control" type="text" value="<?=$emp_info["emp_id"]?>" size="15" readonly  name="emp_id" id="basics" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="empA"><b>Add Working Time Limit</b></label>
                        <input class="input form-control"  type="text" size="15" value="<?=$emp_info["worktimelimit"]?>" placeholder="Time Limit" name="worktimelimit" id="empA" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="esr"><b>Job Types</b></label>
                        <select id="esr" name="jobtypes">
                            <option value="1" <?php if ($emp_info['jobtypes']==1): ?>
                                <?="selected";?>
                            <?php endif; ?>>Contractual</option>
                            <option value="2" <?php if ($emp_info['jobtypes']==2): ?>
                                <?="selected";?>
                            <?php endif; ?>>Hourly</option>
                            <option value="3" <?php if ($emp_info['jobtypes']==3): ?>
                                <?="selected";?>
                            <?php endif; ?>>Monthly</option>
                            <option value="4" <?php if ($emp_info['jobtypes']==4): ?>
                                <?="selected";?>
                            <?php endif; ?>>Part-Time</option>
                        </select>
                    </div>

                </div>
                <hr>
                <button type="submit" name="submit" class="btn btn-info mt-5">Update</button>
            </form>
        </div>
    </div>
<?= $this->endSection();?>