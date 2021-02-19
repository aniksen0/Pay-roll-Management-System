<?=$this->extend("layouts/basefile"); ?>
<?= $this->section("main")?>
<?php
if (isset($validation)):?>
    <?=$validation->listErrors();?>
<?php endif;?>

<?=form_open()?>
    <label for="name">name</label>
    <input type="text" name="name" id="name" placeholder="name">
    <label for="email">email</label>
    <input type="text" name="email" id="email" placeholder="email">
    <label for="pw">pass</label>
    <input type="password" name="pw" placeholder="pw" id="pw">
    <input type="password" name="cpw" placeholder="again" id="pw1">
    <label for="mobile">mobile</label>
    <input type="number" name="mobile" placeholder="mobile" id="mobile">
    <button name="submit" value="register" type="submit" id="budgetsub" class="btn btn-warning">Register</button>
</form>
<?=form_close()?>
<?= $this->endSection()?>

