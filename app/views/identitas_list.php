<?php
function css() {
    ?>
<link rel="stylesheet" type="text/css" href="<?=URL; ?>assets/css/datatables.min.css">
<style>
</style>
<?php
}
require_once 'template/header.php';?>
<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="tables-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="card-style mb-30">
                                <h6 class="mb-10"><?=$page_title;?></h6>
                                <?php
                                $form = new Basic_Form;
                                // $form->a_button( base_url().'item/add', "Add item",'primary-btn mb-10');
                                ?>
                                <div class="table-wrapper table-responsive">
                                    <table class="table" id="datatable">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>Id</h6>
                                                </th>
                                                <th>
                                                    <h6>Nama</h6>
                                                </th>
                                                <th>
                                                    <h6>email</h6>
                                                </th>
                                                <th>
                                                    <h6>Gambar</h6>
                                                </th>
                                                <th>
                                                    <h6>Action</h6>
                                                </th>
                                            </tr>
                                            <!-- end table row-->
                                        </thead>
                                        <tbody>
                                            <?php foreach($identitas as $row) { ?>
                                            <tr>
                                                <td class="min-width">
                                                    <p><?=$row->identitas_id;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=$row->nama;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=$row->email;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=$row->gambar;?></p>
                                                </td>
                                                <td>
                                                    <div class="action">
                                                        <span class="text-danger">
                                                            <a class="text-success"
                                                                href="<?=base_url().'item/edit/'.$row->id;?>"><i
                                                                    class="lni lni-pencil"></i></a> |
                                                            <a class="text-danger" href="#"><i
                                                                    class="lni lni-trash-can"></a></i>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// Show Footer
$order = 5;
define('ORDER', 5);
function javascript() {
    ?>
    <script>            
var base_url = "<?=URL;?>";
var orderby = "<?= ORDER;?>";
var pageshow = 50;
var exportcolumns = [0,1,2,3,4];
</script>
<script src="<?=URL;?>assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL;?>assets/js/datatables.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL;?>assets/js/moment.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL;?>assets/js/datetime-moment.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL;?>assets/js/datatable.js"></script>
<?php
}
require_once 'template/footer.php';
?>