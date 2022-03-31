<?php
$css  = '<style>
        </style>
        <link href="'.URL.'assets/css/form-validation.css" rel="stylesheet">';
require_once 'template/header.php';
?>
<div class="container">
    <main>
        <div class='row g-5 justify-content-center'>
            <div class="col-md-7 col-lg-8">
                <div class="py-3 text-center">
                    <img class="d-block mx-auto mb-4" src="<?=URL;?>assets/img/hydant-logo.png" alt="" width="72">
                    <h2><?=$page_title?></h2>
                    <p class="lead">Below is configuration for mini logger, Please make sure input the correct
                        settings
                    </p>
                </div>
            </div>
        </div>
        <div class='row g-5 justify-content-center'>
            <div class="col-md-7 col-lg-8">
                <div class="card px-1 py-4">
                    <div class="card-body">
                        <h4 class="mb-3">Settings</h4>
                        <div class="row g-3">
                            <?php
                            $form = new Basic_Form;
                            $form->open('', "needs-validation");
                            $form->input('text', 'alarm_01h_status', 'Alarm 01h Status');
                            echo '<div class="row g-3">';
                            $form->input('text', 'alarm', 'Alarm', '', false, 'col-md-4');
                            $form->input('text', 'alarm2', 'Alarm 2', '', false, 'col-md-4');
                            $form->input('text', 'alarm2', 'Alarm 3', '', false, 'col-md-4');
                            echo '</div>';
                            $form->button('submit',"Save", 'btn btn-danger btn-lg');
                            ?>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php
$javascript = '<script>            
var base_url = "' . base_url() . '";
</script>
<script src="' . base_url() . 'assets/js/setting.js"></script>
<script src="'.URL.'assets/js/form-validation.js"></script>';
require_once 'template/footer.php';
?>