<?=$this->extend("layouts/basefile"); ?>
<?= $this->section("main")?>
    <div class="container">

        <div class="form col-sm-11">


            <div class="text-center">
                <h1>Add Work Time Info</h1>
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

            <form action="<?= base_url("/worktime/addworktime/")?>" method="post" id="form">

                <div class="form-row row">
                    <p> <strong> Info </strong> </p>
                    <div class="col-sm-3">
                        <label for="basics"><b>Employee id:</b></label>
                        <select name="emp_id">
                            <?php foreach ($emp_info as $emp):?>
                                <option value="<?=$emp["emp_id"]?>"><?=$emp["emp_name"]?> </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="empA"><b>Add Working Time Limit</b></label>
                        <input class="input form-control" type="text" size="15"  placeholder="Time Limit" name="worktimelimit" id="empA" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="esr"><b>Job Types</b></label>
                        <select id="esr" name="jobtypes">
                            <option value="1" >Contractual</option>
                            <option value="2" >Hourly</option>
                            <option value="3" >Monthly</option>
                            <option value="4" >Part-Time</option>
                        </select>
                    </div>

                </div>
                <hr>
                <button type="submit" name="submit" class="btn btn-info mt-5">ADD</button>
            </form>
        </div>
    </div>
<?= $this->endSection();?>