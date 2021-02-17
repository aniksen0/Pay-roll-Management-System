<?=$this->extend("layouts/basefile"); ?>
<?= $this->section("main")?>

<?=form_open()?>
<label for="name">Name:</label>
<input name="name" id="name" type="text" value="<?=set_value("name")?>" placeholder="name">
<?php if (isset($validation)): ?>
    <?php if ($validation->hasError("name")): ?>
        <?= $validation->getError("name") ?>
    <?php endif; ?>
<?php endif; ?>
<hr>
<label for="email">Email:</label>
<input name="email" id="email" type="text" value="<?=set_value("email")?>" placeholder="email here">
<?php if (isset($validation)): ?>
    <?php if ($validation->hasError("email")): ?>
        <?= $validation->getError("email") ?>
    <?php endif; ?>
<?php endif; ?>
<hr>
<label for="mobile">Mobile:</label>
<input name="mobile" id="mobile"  type="text" value="<?=set_value("mobile")?>" placeholder="mobile">
<?php if (isset($validation)): ?>
    <?php if ($validation->hasError("mobile")): ?>
        <?= $validation->getError("mobile") ?>
    <?php endif; ?>
<?php endif; ?>
<br>
<hr>
<input type="submit" name="save" value="save">
<?=form_close()?>
<?= $this->endSection()?>