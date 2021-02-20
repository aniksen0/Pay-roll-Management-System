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
                                <th scope="col">Joined</th>
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
                                    <td><?=$user->emp_joining_date?></td>
                                    <td><a onclick="sure()" href="<?=base_url('dashboard/userdelete/'.$user->emp_id)?>"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i> delete </button></a>
                                        <a href="<?=base_url('dashboard/useredit/'.$user->emp_id)?>"><button class="btn btn-warning"><i class="fas fa-pen"></i> Update</button></a>
                                        <a href="<?=base_url('userprofile/userviewHr/'.$user->emp_id)?>"> <button class="btn btn-info"><i class="fas fa-search"></i> View</button></a>
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
