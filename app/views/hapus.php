<?php
require_once 'template/header.php';
?>

<?php
if (!empty($_POST['nama'])) {
// cek apakah data berhasil dihapus atau tidak
    if ($db->deleteIdentitas(uri(3))) {
    echo "
    <script>
    alert('Database Berhasil Dihapus!');
    document.location.href = '" . base_url() . "'identitas';
    </script>
    ";
        } else {
    echo "
    <script>
    alert('Database Gagal Dihapus!');
    document.location.href = '" . base_url() . "'identitas';
    </script>
    ";
    }
}
?>


<?php
require_once 'template/footer.php';
?>