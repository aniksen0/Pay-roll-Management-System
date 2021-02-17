<?=$this->extend("layouts/basefile"); ?>
<?= $this->section("main")?>
<div class="container">
    <p>HI THERE THIS IS A DASHBOARD</p>
    <?php if(session()->getTempdata('id')):?>
        <div class="col col-sm-11 alert alert-danger"><?=session()->getTempdata("id");?></div>
    <?php endif; ?>
</div>
<?= $this->endSection()?>
