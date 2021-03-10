<?= $this->extend("layouts/basefile")?>
<?= $this->section("main"); ?>

<div class="container">

    <div class="row d-flex justify-content-center align-items-center mt-5 bg-light">
        <div class="col-12 col-sm-6">
            <h1 class="alert-heading">Employee Leave Info For <?=date("F")?></h1>
        </div>
        <div class="col-12 col-sm-6 ">

            <a href="<?=base_url("loan/addloanepage/")?>"><button class="btn btn-danger float-end">Add Employee Loan Info</button> </a>
        </div>
    </div>
    <div class="row">

    </div>
    <?php if(session()->getTempdata('success')):?>
        <div class="alert alert-success"> <?=session()->getTempdata("success");?> </div>
        <?=session()->removeTempdata('success');?>
    <?php endif; ?>
    <?php if(session()->getTempdata('error')):?>
        <div class="alert alert-danger"> <?=session()->getTempdata("error");?> </div>
        <?=session()->removeTempdata('error');?>
    <?php endif; ?>
    <div class="row " >
        <div class=" col-12 col-sm-12">

            <div class="table-responsive mt-4">
                <table  class=" table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">emp_id</th>
                        <th scope="col">Loan Amount</th>
                        <th scope="col">Max Loan Amount</th>
                        <th scope="col">Deduction</th>
                        <th scope="col">Recurring Deduction</th>
                        <th scope="col"> Warning Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if ($loandata!=0):?>
                        <?php foreach ($loandata as $row): ?>
                            <tr>
                                <td><?=$row['emp_id']?></td>
                                <td><?=$row['emp_loan_amount']?></td>
                                <td><?=$row["emp_loan_max_amount"]?></td>
                                <td><?=$row["emp_deduction_loan_monthly"]?></td>
                                <td><?=$row["emp_recurring_deduction"]?></td>
                                <td><?=$row["emp_warning_status"]?></td>
                                <td>
                                    <a href="<?=base_url('loan/updatepage/'.$row["emp_id"])?>"><button class="btn btn-warning"><i class="fas fa-pen"></i> Update</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif ?>
                    <?php if($loandata==0): ?>
                        <h3>No Employee Loan data</h3>
                    <?php endif;?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection("main")?>
