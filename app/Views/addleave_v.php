<?=$this->extend("layouts/basefile"); ?>
<?= $this->section("main")?>
    <div class="container">

        <div class="form col-sm-11">


            <div class="text-center">
                <h1>Add Leave Data</h1>
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


            <form action=" <?= base_url("/leave/addleave/")?>" method="post" id="form">

                <div class="form-row row">
                    <span> <strong> Info </strong> </span>
                    <div class="col-sm-3">
                        <label for="basics"><b>Employee Name:</b></label>
                        <select name="emp_id">
                            <?php foreach ($emp_info as $emp):?>
                                <option value=<?=$emp["emp_id"]?>><?=$emp["emp_name"]?> </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="empA"><b>Leave From</b></label>
                        <input class="input form-control" type="date" size="15"  name="from" id="empA" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="empA"><b>Leave To</b></label>
                        <input class="input form-control" type="date" size="15"  name="to" id="empA" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="esr"><b>Status</b></label>
                        <select id="esr" name="status1">
                            <option value="1" >On-Leave</option>
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

                <button type="submit" name="submit" class="btn btn-info mt-5">Update</button>
            </form>
        </div>
    </div>
<?= $this->endSection();?>