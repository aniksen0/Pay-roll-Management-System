<?= $this->extend("layouts/basefile")?>

<?= $this->section("main")?>

<div class="container">
    <div class="col-12 col-sm-10" style="margin-top:15px">
        <h1 class="alert-heading">Employee list</h1>
    </div>
    <div class="row " >

        <div class=" col-12 col-sm-10">

                <div class="mt-4">
                    <table  class=" table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">contact Number</th>
                                <th scope="col">Status Number</th>
                                <th scope="col">Joined</th>
                                <th scope="col"> Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?=$user->emp_name ?></td>
                                    <td><?=$user->emp_email?></td>
                                    <td><?=$user->emp_contact_number?></td>
                                    <td><?=$user->status?></td>
                                    <td><?=$user->emp_joining_date?></td>
                                    <td><button class="btn btn-danger"><i class="fas fa-edit"></i> Edit</button>
                                    <button class="btn btn-warning"><i class="fas fa-pen"></i> Update</button>
                                    <button class="btn btn-info"><i class="fas fa-search"></i> View</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
        </div>
</div>

<?= $this->endSection()?>
