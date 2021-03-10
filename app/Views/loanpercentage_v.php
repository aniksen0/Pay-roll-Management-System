<?= $this->extend("layouts/basefile")?>
<?= $this->section("main"); ?>

<div class="container">

    <div class="row d-flex justify-content-center align-items-center mt-5 bg-light">
        <div class="col-12 col-sm-6">
            <h1 class="alert-heading">Employee Leave Info For <?=date("F")?></h1>
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
                        <th scope="col">Loan Percentage</th>
                    </tr>
                    </thead>


                    <tbody>
                    <form method="post" action="<?= base_url("/loan/addloanpercentage")?>">
                        <td><input type="number" value="<?=$loan['loanpercentage']?>" name="loanpercentage"> <button class="btn btn-info" type="submit">Update</button> </td>

                    </form>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection("main")?>
