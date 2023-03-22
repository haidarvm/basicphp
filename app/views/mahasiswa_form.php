<?php
function css(){
?>
<style>
</style>
<link href="<?=URL;?>assets/css/form-validation.css" rel="stylesheet">
<?php
} ?>
<?php
require_once 'template/header.php';
?>
<div class="container-fluid">
    <main>
        <div class='row  justify-content-center' style="padding-left: 60px;">
            <div class="col-md-7 col-lg-8">
                <div class=" ">
                    <img class="d-block mx-auto mb-4 float-start me-3" src="<?=URL;?>assets/img/hydant-logo.png" alt=""
                        height="70">
                    <h3 class=""><?=$page_title?></h3>
                    <p class="lead ">Mahasiswa
                    </p>
                </div>
            </div>
        </div>
        <div class='row g-5 justify-content-center'>
            <div class="col-md-6 col-lg-6">
                <div class="card px-1 py-1">
                    <div class="card-body">
                        <h5 class="mb-3 fw-bold text-center"><i class="fa-solid fa-gear fa-xs text-danger me-2"></i>
                            Settings</h5>
                        <hr />
                        <div class="row g-3">
                            <?php
                            // echo checkVal($setting,'dns'); // print_r($setting);exit; // echo checkVal($setting,'station_id');exit;
                            $form = new Basic_Form;
                            $form->open(base_url().'mahasiswa/save', "needs-validation form1", 'post');
                            $form->input('text', 'nama', 'Nama', '', '', 'col-sm-4');
                            $form->button('submit', 'Save ');

                            $form->close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            < </main>
        </div>
        <?php
function javascript() {
    ?>
        <script src="<?=URL; ?>assets/js/jquery-3.6.0.min.js"></script>
        <script src="<?=URL; ?>assets/js/jquery.valid.min.js"></script>
        <script src="<?=URL; ?>assets/js/sweetalert.min.js"></script>
        <?php
} 
require_once 'template/footer.php';
?>