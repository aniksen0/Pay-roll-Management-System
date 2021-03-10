<?= $this->extend("layouts/basefile")?>

<?= $this->section("main")?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6" style="margin-top:15px">
            <h1 class="alert-heading">Employee list</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12"
        <?php if(session()->getTempdata('success')):?>
            <div class="alert alert-success"><?=session()->getTempdata("success");?></div>
        <?php endif; ?>
        <?php if(session()->getTempdata('error')):?>
            <div class="alert alert-danger"><?=session()->getTempdata("error");?></div>
        <?php endif; ?>
    </div>


    <div class="row " >

        <div class=" col-12 col-sm-12">

            <div class="mt-4">
                <table  class=" table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">contact Number</th>
                        <th scope="col">Statusr</th>
                        <th scope="col">Employee Role</th>
                        <th scope="col">Basic Salary</th>
                        <th scope="col">Allowances</th>
                        <th scope="col">Bank Name</th>

                        <th scope="col"> Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php if($users==0): ?>
                        <h3>No data here</h3>
                    <?php endif;?>
                    <?php if ($users>0):?>

                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?=$user->emp_name ?></td>
                                <td><?=$user->emp_email?></td>
                                <td><?=$user->emp_contact_number?></td>
                                <td><?=$user->status?></td>
                                <td>
                                    <?php if ($user->emp_role==1): ?>
                                        <?="System Admin";?>
                                    <?php endif; ?>

                                    <?php if ($user->emp_role==2): ?>
                                        <?="Human Resource"?>
                                    <?php endif; ?>

                                    <?php if ($user->emp_role==3): ?>
                                        <?="Employee"?>
                                    <?php endif; ?>

                                </td>
                                <td><?=$user->emp_basic_salary?></td>
                                <td><?=$user->emp_allowances?></td>
                                <td><?=$user->emp_bank_name?></td>
                                <td>
                                    <a href="<?=base_url('salaryslip/salaryview/'.$user->emp_id)?>"> <button class="btn btn-info"><i class="fas fa-cog"></i> Generate Salary</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php endif?>


                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection()?>
