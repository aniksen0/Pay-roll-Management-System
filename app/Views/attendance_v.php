<?= $this->extend("layouts/basefile")?>
<?= $this->section("main"); ?>

<div class="container">

    <div class="row d-flex justify-content-center align-items-center mt-5 bg-light">
        <div class="col-12 col-sm-6">
            <h1 class="alert-heading">Employee Attendance Info</h1>
        </div>
        <div class="col-12 col-sm-6 ">

            <a href="<?=base_url("attendance/manualattendance/")?>"><button class="btn btn-danger float-end">Manual attendance Update</button> </a>
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
                        <th scope="col">date</th>
                        <th scope="col">emp_id</th>
                        <th scope="col">status</th>
                        <th scope="col">Time In</th>
                        <th scope="col">Time Out</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Over_Time</th>
                        <th scope="col"> Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if ($emp_attendance!=0):?>
                        <?php foreach ($emp_attendance as $row): ?>
                            <tr>
                                <td><?=$row["attendance_date"]?></td>
                                <td><?=$row["emp_id"]?></td>
                                <td><?=$row["status1"]?></td>
                                <td><?=$row["time_in"]?></td>
                                <td><?=$row["time_out"]?></td>
                                <td><?=$row["comments"]?></td>
                                <td><?=$row["overtime"]?></td>
                                <td>
                                    <a href="<?=base_url('attendance/updatepage/'.$row["uiid"])?>"><button class="btn btn-warning"><i class="fas fa-pen"></i> Update</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif ?>
                    <?php if($emp_attendance==0): ?>
                        <h3>No data here</h3>
                    <?php endif;?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

<?= $this->endSection("main")?>
