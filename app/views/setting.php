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
                <div class="py-3 ">
                    <img class="d-block mx-auto mb-4 float-start me-3" src="<?=URL;?>assets/img/hydant-logo.png" alt="" height="70">
                    <h3 class=""><?=$page_title?></h3>
                    <p class="lead ">Below is configuration for mini logger, Please make sure input the correct settings
                    </p>
                </div>
            </div>
        </div>
        <div class='row g-5 justify-content-center'>
            <div class="col-md-6 col-lg-6">
                <div class="card px-1 py-1">
                    <div class="card-body">
                        <h5 class="mb-3 fw-bold text-center"><i class="fa-solid fa-gear fa-xs text-danger me-2"></i> Settings</h5>
                        <hr/>
                        <div class="row g-3">
                            <?php
                            // echo checkVal($setting,'dns');
                            // print_r($setting);exit;
                            // echo checkVal($setting,'station_id');exit;
                            $form = new Basic_Form;
                            $form->open('', "needs-validation form1", 'post');
                            $form->input_hidden('setting_id',checkVal($setting,'setting_id'));
                            echo '<div class="row g-3">';
                            $form->input('text', 'station_id', 'Station ID',checkVal($setting,'station_id', 'STAL999'), '', 'col-sm-4');
                            $form->input('number', 'alarm_01h_status', 'Alarm 01h Status','0', '', 'col-sm-4');
                            $form->input('number', 'alarm_24h_status', 'Alarm 24h Status','0', '', 'col-sm-4');
                            echo '</div>';
                            echo '<div class="row g-3">';
                            $form->input('number', 'alarm_01h', 'Alarm 01h','20', checkVal($setting, 'alarm_01h'), 'col-sm-4');
                            $form->input('number', 'alarm_24h', 'Alarm 24h','100', checkVal($setting,'alarm_24h'), 'col-sm-4');
                            $form->input('number', 'alarm_sms', 'Alarm SMS',checkVal($setting,'alarm_sms', '081395349147'), '', 'col-sm-4');
                            echo '</div>';
                            echo '<div class="row g-3">';
                            $form->input('number', 'alarm', 'Alarm',checkVal($setting,'alarm', 0), true, 'col-sm-3');
                            $form->input('text', 'protocol', 'Protocol',checkVal($setting,'protocol', 'socket'),true, 'col-sm-3');
                            $form->input('number', 'interval', 'Interval',checkVal($setting,'interval', '3'), '', 'col-sm-3');
                            $form->input('number', 'instantaneous', 'Instantaneous',checkVal($setting,'instantaneous','3'),true, 'col-sm-3');
                            echo '</div>';
                            echo ' <div class="d-grid gap-2 text-center mt-2 col-6 mx-auto">';
                            $form->button('submit',"Save", 'btn btn-danger btn-lg',1);
                            echo '</div>';
                            $form->close();
                            $form->open('', "needs-validation form2");
                            echo '<h5 class="mb-3 fw-bold text-center mt-2"><i class="fa-solid fa-wifi fa-xs text-danger me-2"></i> GPRS</h5>'; // GPRS
                            echo '<hr class=""/><div class="row g-3">';
                            $form->input('text', 'apn', 'APN',checkVal($setting,'apn', 'indosatgprs'),true, 'col-sm-6');
                            $form->input('text', 'dns', "DNS",checkVal($setting,'dns','8.8.8.8'),'', 'col-sm-6');
                            echo '</div>';
                            echo '<div class="row g-3">';
                            $form->input('text', 'password_gprs', 'Password',checkVal($setting,'password_gprs', 'indosatgprs'), true, 'col-sm-6');
                            $form->input('text', 'user', 'User', checkVal($setting,'user', 'indosatgprs'), true, 'col-sm-6');
                            echo '</div>';
                            echo '<div class="d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">By Changing setting you  agree to the changes and consequence of any erros</small> <a href="#" class="terms">Terms & Conditions</a></div>
                            <div class="d-grid gap-2 col-6 mx-auto">';
                            $form->button('submit',"Save", 'btn btn-danger btn-lg', 2);
                            echo '</div>';
                            $form->close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card px-1 py-1">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-6">
                            <h5 class="mb-3 fw-bold text-center"><i class="fa-solid fa-server fa-xs text-danger me-2"></i>Server 1</h5>
                            <hr/>
                            <div class="row g-3">
                                <?php
                                $form = new Basic_Form;
                                $form->open('', "needs-validation form3");
                                $form->input('text', 'address1', 'Address', checkVal($setting,'address1', 'ds.manvis.web.id'));
                                $form->input('text', 'passwd1', 'Passwd', checkVal($setting,'passwd1'));
                                $form->input('text', 'path1', 'Path', checkVal($setting,'path'));
                                $form->input('text', 'user1', 'User', checkVal($setting,'user1'));
                                $form->input('text', 'port1', 'Port', checkVal($setting,'port1'));
                                echo '
                                <div class="d-grid gap-2 col-6 mx-auto">';
                                $form->button('submit',"Save", 'btn btn-danger btn-lg', 3);
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                
                                $form->close();
                                echo '<div class="col-sm-6">';
                                echo '<h5 class="mb-3 fw-bold text-center"><i class="fa-solid fa-server fa-xs text-danger me-2"></i>Server 2</h5><hr/>'; // Server2
                                $form->open('', "needs-validation form4");
                                $form->input('text', 'address2', 'Address', checkVal($setting,'address2', 'ds.manvis.web.id'));
                                $form->input('text', 'passwd2', 'Passwd', checkVal($setting,'passwd2'));
                                $form->input('text', 'path2', 'Path', checkVal($setting,'path2'));
                                $form->input('text', 'user2', 'User', checkVal($setting,'user2'));
                                $form->input('text', 'port2', 'Port', checkVal($setting,'port2'));
                                echo '<div class="d-grid gap-2 col-6 mx-auto">';
                                $form->button('button',"Save", 'btn btn-danger btn-lg', 4);
                                echo '</div></div>';
                                $form->close();
                                echo '<div class="d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">By Changing setting you  agree to the changes and consequence of any erros</small> <a href="#" class="terms">Terms & Conditions</a></div>';
                                echo "<hr  style='margin:0 10px;width:560px'/><div class='row mt-4'>";
                                $form->input('text', 'version', 'Version', checkVal($setting,'version', 'ATM-V.2.0'),'', 'col-sm-6', '','','disabled');
                                $form->input('text', 'date', 'date', dateIndos(),'', 'col-sm-6', '','', '','disabled');
                                echo "</div>";
                                $form->close();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="result"></div>
            </div>
        </div>
    </main>
</div>
<?php
function javascript() {
    ?>
    <script src="<?=URL; ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?=URL; ?>assets/js/jquery.valid.min.js"></script>
    <script src="<?=URL; ?>assets/js/setting.js"></script>
<?php
} 
require_once 'template/footer.php';
?>