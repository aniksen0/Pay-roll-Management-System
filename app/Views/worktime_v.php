<?= $this->extend("layouts/basefile")?>
<?= $this->section("main"); ?>

<div class="container">

    <div class="row d-flex justify-content-center align-items-center mt-5 bg-light">
        <div class="col-12 col-sm-6">
            <h1 class="alert-heading">Employee Work Time Info</h1>
        </div>
        <div class="col-12 col-sm-6 ">

            <a href=" <?=base_url("Worktime/addworktimepage/")?>"><button class="btn btn-danger float-end">Employee Worktime Update</button> </a>
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

                        <th scope="col">emp_id</th>
                        <th scope="col">Job Types</th>
                        <th scope="col">Work Hour</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if ($emp_info!=0):?>
                        <?php foreach ($emp_info as $row): ?>
                            <tr>
                                <td><?=$row["emp_id"]?></td>
                                <td>
                                    <?php if ($row['jobtypes']==1): ?>
                                        <?="Contractual";?>
                                    <?php endif; ?>

                                    <?php if ($row['jobtypes']==2): ?>
                                        <?="Hourly"?>
                                    <?php endif; ?>

                                    <?php if ($row['jobtypes']==3): ?>
                                        <?="Monthly"?>
                                    <?php endif; ?>

                                    <?php if ($row['jobtypes']==4): ?>
                                        <?="Part-Time"?>
                                    <?php endif; ?>
                                </td>
                                <td><?=$row["worktimelimit"]?></td>
                                <td>
                                    <a href="<?=base_url('Worktime/updateworktimepage/'.$row["emp_id"])?>"><button class="btn btn-warning"><i class="fas fa-pen"></i> Update</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif ?>
                    <?php if($emp_info==0): ?>
                        <h3>No data here</h3>
                    <?php endif;?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection("main")?>
