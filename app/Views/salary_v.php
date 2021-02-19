<?= $this->extend("layouts/basefile")?>
<?= $this->section("main"); ?>

<div class="container">

    <div class="row d-flex justify-content-center align-items-center mt-5 bg-light">
            <div class="col-12 col-sm-6">
                <h1 class="alert-heading">Employee Salary Info</h1>
            </div>
        <div class="col-12 col-sm-6 ">
           <a href="<?=base_url("salary/addsalary/")?>"><button class="btn btn-danger float-end">Add Salary Info</button> </a>
        </div>

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
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">Basic Salary</th>
                        <th scope="col">Allowances</th>
                        <th scope="col">Nomination</th>
                        <th scope="col">Bank Account</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col"> Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php if ($emp_salary!=0):?>
                        <?php foreach ($emp_salary as $row): ?>
                            <tr>
                                <td><?=$row->emp_name ?></td>
                                <td><?=$row->emp_email?></td>
                                <td><?=$row->emp_basic_salary?></td>
                                <td><?=$row->emp_allowances?></td>
                                <td><?=$row->emp_nomination?></td>
                                <td><?=$row->emp_bank_account?></td>
                                <td><?=$row->emp_bank_name?></td>
                                <td><a onclick="sure()" href="<?=base_url('salary/salarydelete/'.$row->emp_id)?>"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i> delete </button></a>
                                    <a href="<?=base_url('salary/salaryupdateedit/'.$row->emp_id)?>"><button class="btn btn-warning"><i class="fas fa-pen"></i> Update</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif ?>
                    <?php if($emp_salary==0): ?>
                        <h3>No data here</h3>
                    <?php endif;?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>
