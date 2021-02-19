<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pay-roll Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="<?=base_url();?>/public/Assets/css/boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/public/Assets/css/loginstyle.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
<!--<div class="container d-flex justify-content-center align-self-center">-->
<!--    <div class="row ">-->
<!--        <div class="col-sm-10">-->
<!--        <span>-->
<!--        --><?php
//        if (isset($validation)):?>
<!--            <div class="alert alert-danger"> --><?php //echo $validation->listErrors();?><!--  </div>-->
<!--        --><?php //endif;?>
<!---->
<!--            --><?php //if(session()->getTempdata('error')):?>
<!--                <div class="alert alert-danger">--><?//=session()->getTempdata("error");?><!--</div>-->
<!--            --><?php //endif; ?>
<!--        </span>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="container d-flex justify-content-center align-self-center move">

    <div class="row ">

            <?php
            if (isset($validation)):?>
                <div class="alert alert-danger"> <?php echo $validation->listErrors();?>  </div>
            <?php endif;?>

            <?php if(session()->getTempdata('error')):?>
                <div class="alert alert-danger"> <?=session()->getTempdata("error");?> </div>
            <?php endif; ?>

        <div class="sidenav col-12 col-sm-4">
            <div class="login-main-text text-center a">
                <h2 class="ash">Pay-roll Management System</h2>
                <p class="ash">Login from here to access.</p>
            </div>
        </div>

        <div class="col-12 col-sm-8 align-self-center">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">


                    <?=form_open()?>
                        <div class="form-group">
                            <label for="id" class="ash"><strong> User Id: </strong> </label>
                            <input id="id" type="text" name="id" class="form-control" placeholder="User id">
                        </div>
                        <div class="form-group">
                            <label for="pw" class="ash"><strong> Password: </strong></label>
                            <input id="pw" type="password" class="form-control" name="pass" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-dark" value="login">Login</button>

                    <?=form_close()?>
                </div>
            </div>
        </div>
    </div>


</div>

<footer style="padding-top: 15px;align-content: center " class=" d-flex justify-content-center">
    <p class="d-flex justify-content-bottom ash"> &copy 2021 All Rights Reserved </p></footer>
</body>


</html>