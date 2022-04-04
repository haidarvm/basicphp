<?php
function css() {
    ?>
<style>
</style>
<link href="<?=URL; ?>assets/css/login.css" rel="stylesheet">
<?php
} ?>
<?php
require_once 'template/header.php';
?>
<main class="form-signin">
    <div class='row justify-content-center text-center mt-1 ms-3 me-3'>
        <div class="card px-1 py-3 " style="width: auto;">
            <div class="card-body">
                <img class="user" src="<?=URL;?>assets/img/hydant-logo.png" height="100px" width="100px">
                <h3 class="mt-3">Sign in here</h3>
                <?=$message;?>
                <form class="me-3 ms-3 mt-3" action="<?=URL;?>auth/login" method="post">
                    <input class="form-control mt-4 mb-4" id="username" name="username" type="text"  placeholder="Username" required>
                    <input class="form-control mt-4 mb-4" id="password" type="password" name="password" placeholder="Password" required>
                    <button class="btn btn-warning btn-lg mt-5" type="submit" name="" value="Login">Login</button>
                </form>
            </div>
        </div>
    </div>
</main>


<?php
// require_once 'template/footer.php';
?>