<?php
// Show Header and Menu
require_once 'template/header.php';
require_once 'template/menu.php';
?>
	<!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <form method="post">
                <p><input type="text" name="patient-name" placeholder="Patient Name" value="" class="form-control" required /></p>
                <p><button type="submit" name="search-patient" class="btn btn-default">Search</button></p>
            </form>
        </div>
        <p>&nbsp;</p>
        <?php
        if (isset($_POST['search-patient'])) {
            // Execute if patient name contains search string
            if ($output['code'] == 200) {
                echo '<h3>List of Patients</h3>';
                echo '<ol>';

                $data = json_decode($output['data'], TRUE);
                foreach ($data as $row) {
                    echo "<li>The patient's name is " . $row['name'] . ', and his age is ' . $row['age'] . '.<br/></li>';
                }

                echo '</ol>';
            } else {
                echo '<h3>' . $output['data'] . '</h3>';
            }
        }
        ?>
      </div>
    </div>
<?php
// Show Footer
require_once 'template/footer.php';
?>