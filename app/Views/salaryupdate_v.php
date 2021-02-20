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

        <form action="<?= base_url("/salary/salaryupdate/".$emp_salary['emp_id'])?>" method="post">
            <div class="form-row row">

                <div class="col-sm-4">
                    <label for="id"><b> employee Id:</b></label>
                    <input type="text" readonly name="id" value="<?=$emp_salary['emp_id']?>">
                </div>
            </div>
            <div class="form-row row">
                <p> <strong> Info </strong> </p>
                <div class="col-sm-3">
                    <label for="basics"><b>Update Employee Basic Salary:</b></label>
                    <input class="input form-control" value="<?=$emp_salary['emp_basic_salary']?>" type="text" size="15" placeholder="Employee Basic Salary:" name="ebs" id="basics" required>
                </div>
                <div class="col-sm-3">
                    <label for="empA"><b>Update Employee Allowances</b></label>
                    <input class="input form-control" type="text" size="15" value="<?=$emp_salary['emp_allowances']?>" placeholder="Employee Allowances" name="ea" id="empA" required>
                </div>
                <div class="col-sm-3">
                    <label for="esr"><b>Update Employee Skills Record</b></label>
                    <input class="input form-control" type="text" size="15" value="<?=$emp_salary['emp_skills_record']?>" placeholder="Employee Skills Record" name="esr" id="esr" required>
                </div>
                <div class="col-sm-3">
                    <label for="eq"><b>Update Employee Qualification:</b></label>
                    <input class="input form-control" value="<?=$emp_salary['emp_qualification']?>" type="text" size="15" placeholder="Employee Qualification:: eg:trainer,junior" name="eq" id="eq" required>
                </div>
            </div>
            <div class="form-row row">
                <p> <strong> Info </strong> </p>
                <div class="col-sm-3">
                    <label for="etr"><b>Update Employee Training Record:</b></label>
                    <input class="input form-control" value="<?=$emp_salary['emp_training_record']?>" type="text" size="15" placeholder="etr" name="etr" id="etr" required>
                </div>
                <div class="col-sm-3">
                    <label for="eba"><b>Update Employee Bank Account</b></label>
                    <input class="input form-control"  value="<?=$emp_salary['emp_bank_account']?>" type="text" size="15" placeholder="Employee Bank Account" name="eba" id="eba" required>
                </div>
                <div class="col-sm-3">
                    <label for="ebn"><b>Update Employee Bank Name</b></label>
                    <input class="input form-control" type="text" size="15" value="<?=$emp_salary['emp_bank_name']?> " placeholder="Employee Bank Name" name="ebn" id="ebn" required>
                </div>
                <div class="col-sm-3">
                    <label for="en"><b>Update Employee Nomination:</b></label>
                    <input class="input form-control" type="text" size="15" value="<?=$emp_salary['emp_nomination']?> " placeholder="Employee Nomination:" name="en" id="en" required>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-info mt-5">Update</button>
        </form>
    </div>
</div>
<?= $this->endSection();?>
