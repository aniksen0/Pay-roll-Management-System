<?= $this->extend("layouts/basefile")?>
<?= $this->section("main")?>
<?=form_open()?>
<label for="name">Name:</label>
<input name="name" id="name" type="text">
    <label for="email">email:</label>
    <input name="email" id="email" type="text">
    <label for="phone">phone:</label>
    <input name="phone" id="phone" type="text">
    <label for="birth">birth:</label>
    <input name="birth" id="birth" type="date">
    <button type="submit" name="sub">SUBMIT</button>
<?=form_close()?>

<?=$this->endSection()?>