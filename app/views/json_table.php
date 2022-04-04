<main>
    <div class="container mt-20 ">
        <div class="row">
        <div class='row mt-3  justify-content-center' style="">
            <div class="col-md-7 col-lg-3">
                <div class=" ">
                    <img class="d-block mx-auto  float-start me-3" src="<?=URL;?>assets/img/hydant-logo.png" alt="" height="30">
                    <h4 class=""><?=$page_title?></h4>
                    <!-- <p class="lead ">Below is configuration for mini logger, Please make sure input the correct settings -->
                    </p>
                </div>
            </div>
        </div>
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">id</th>
                            <th scope="col">Body</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        $i = 1;
        foreach ($post as $row) { ?>
                        <tr>
                            <th scope="row"><?=$i++;?></th>
                            <td><?=$row->id;?></td>
                            <td class="maxtd text-danger"><?=$row->body;?></td>
                            <td><?=tglJamDate($row->created);?></td>
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
function javascript() {
            ?>
<script>
var base_url = "' . base_url() . '";
</script>
<script src="<?=URL; ?>assets/js/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    function reload_page() {
        window.location.reload(true);
    }
    // setInterval(function() {
    //     reload_page();
    // }, 1000);
});
</script>
<?php
        }
require_once 'template/footer.php';
?>