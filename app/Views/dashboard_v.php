<?=$this->extend("layouts/basefile"); ?>
<?= $this->section("main")?>
<div class="container">
    <p>HI THERE THIS IS A DASHBOARD</p>
    <?php if(session()->getTempdata('id')):?>
        <div class="col col-sm-11 alert alert-danger"><?=session()->getTempdata("id");?></div>
    <?php endif; ?>
    <div class="container">
        <div class="main--cards">
            <div class="card">
                <i
                    class="fas fa-money-bill-alt fa-2x text-green"
                    aria-hidden="true"
                ></i>
                <div class="card_inner">
                    <p class="text-primary-p">Total Employee</p>
                    <span class="font-bold text-title"><?php echo"578" ?></span>
                </div>
            </div>

            <div class="card">
                <i class="fas fa-dollar-sign fa-2x text-red"></i>
                <div class="card_inner">
                    <p class="text-primary-p">Total Employee On leave</p>
                    <span class="font-bold text-title"><?php echo"578" ?></span>
                </div>
            </div>

            <div class="card">
                <i class="fas fa-exclamation-triangle text-yellow fa-2x"></i>
                <div class="card_inner">
                    <p class="text-primary-p">Total Part Time Employee</p>
                    <span class="font-bold text-title"><?php echo"578" ?></span>
                </div>
            </div>

            <div class="card">
                <i
                    class="fas fa-thumbs-up fa-2x text-green"
                    aria-hidden="true"
                ></i>
                <div class="card_inner">
                    <p class="text-primary-p">Best Employee</p>
                    <span class="font-bold text-title"><?php echo"578" ?></span>
                </div>
            </div>
        </div>
    </div>

    </div>

<?= $this->endSection()?>
