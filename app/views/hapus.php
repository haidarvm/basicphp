<?php
require_once 'template/header.php';
?>

<?php
if (!empty($_POST['nama'])) {
// cek apakah data berhasil dihapus atau tidak
    if ($db->deleteIdentitas($_POST) > 0) {
    echo "
    <script>
    alert('Database Berhasil Dihapus!');
    document.location.href = 'identitas';
    </script>
    ";
        } else {
    echo "
    <script>
    alert('Database Gagal Dihapus!');
    document.location.href = 'identitas';
    </script>
    ";
    }
}
?>


<?php
require_once 'template/footer.php';
?>