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

        <form action="<?= base_url("/loan/addloan")?>" method="post">
            <div class="form-row row">

                <div class="col-sm-4">
                    <label for="id"><b>employee Id:</b></label>
                    <select id="id" name="id">
                        <?php foreach ($emp_info as $emp):?>
                            <option value=<?=$emp->emp_id?>><?=$emp->emp_name?> </option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="form-row row">
                <p> <strong> Info </strong> </p>
                <div class="col-sm-3">
                    <label for="basics"><b>Employee Loan Amount:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Employee Loan Amount:" name="ela" id="basics" required>
                </div>
                <div class="col-sm-3">
                    <label for="empA"><b>Employee Loan Max Amount</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Employee Loan Max Amount" name="elma" id="empA" required>
                </div>
                <div class="col-sm-3">
                    <label for="esr"><b>Employee Deduction Loan Monthly</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Employee Deduction Loan Monthly" name="edlm" id="esr" required>
                </div>
                <div class="col-sm-3">
                    <label for="eq"><b>Employee Recurring Deduction:</b></label>
                    <input class="input form-control" type="text" size="15" placeholder="Employee Recurring Deduction" name="erd" id="eq" required>
                </div>
            </div>
            <div class="form-row row">
                <p> <strong> Info </strong> </p>
                <div class="col-sm-3">
                    <label for="etr"><b>Employee Warning Status:</b></label>
                    <select name="ews" id="etr">
                        <option value="" selected>Select One</option>
                        <option value="low">low</option>
                        <option value="medium">medium</option>
                        <option value="high" >high</option>
                    </select>
                </div>

            </div>
            <button type="submit" name="submit" class="btn btn-info mt-5">ADD</button>
        </form>
    </div>
</div>
<?= $this->endSection();?>
