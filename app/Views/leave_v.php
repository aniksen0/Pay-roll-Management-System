<?= $this->extend("layouts/basefile")?>
<?= $this->section("main"); ?>

<div class="container">

    <div class="row d-flex justify-content-center align-items-center mt-5 bg-light">
        <div class="col-12 col-sm-6">
            <h1 class="alert-heading">Employee Leave Info For <?=date("F")?></h1>
        </div>
        <div class="col-12 col-sm-6 ">

            <a href="<?=base_url("leave/addleavepage/")?>"><button class="btn btn-danger float-end">Manual Leave Update</button> </a>
        </div>
    </div>
    <div class="row">
        <p class="text-center alert-info" style="text"><?= "Today is ".date("Y/m/d ").date("l"); ?></p>
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
                        <th scope="col">date</th>
                        <th scope="col">emp_id</th>
                        <th scope="col">status</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Over_Time</th>
                        <th scope="col"> Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if ($emp_leave!=0):?>
                        <?php foreach ($emp_leave as $row): ?>
                            <tr>
                                <td><?=$row['attendance_date']?></td>
                                <td><?=$row['emp_id']?></td>
                                <td>
                                    <?php if ($row['status1']==1): ?>
                                        <?="On Leave";?>
                                    <?php endif; ?>

                                    <?php if ($row['status1']==2): ?>
                                        <?="Half Day"?>
                                    <?php endif; ?>

                                    <?php if ($row['status1']==3): ?>
                                        <?="Present"?>
                                    <?php endif; ?>

                                    <?php if ($row['status1']==4): ?>
                                        <?="Absent"?>
                                    <?php endif; ?>
                                </td>

                                <td><?=$row["comments"]?></td>
                                <td><?=$row["overtime"]?></td>
                                <td>
                                    <a href="<?=base_url('attendance/updatepage/'.$row["uiid"])?>"><button class="btn btn-warning"><i class="fas fa-pen"></i> Update</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif ?>
                    <?php if($emp_leave==0): ?>
                        <h3>No Employee on leave</h3>
                    <?php endif;?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection("main")?>
