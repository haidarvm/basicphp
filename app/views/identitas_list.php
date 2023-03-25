<?php


if (!empty($_POST)) {

    if (!empty($_POST['nama'])) {
        // cek apakah data berhasil ditambahkan atau tidak
        if ($db->insertIdentitas($_POST) > 0) {
            echo "
        <script>
        alert('Database Berhasil Ditambahkan!');
        document.location.href = 'identitas';
        </script>
        ";
        } else {
            echo "
        <script>
        alert('Database Gagal Ditambahkan!');
        document.location.href = 'identitas';
        </script>
        ";
        }
    }
}


function css() {

    
    ?>
<link rel="stylesheet" type="text/css" href="<?=URL; ?>assets/css/datatables.min.css">
<style>
</style>
<?php
}
require_once 'template/header.php';?>

<h1 class="text-center text-light bg-dark">DAFTAR IDENTITAS DIRI</h1>


<br></br>

<table class="table table-dark table-striped table-hover">
    <!-- Menampilkan Record/Field Database -->

    <tr>
        <th>N0.</th>
        <th>AKSI</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>EMAIL</th>
        <th>GAMBAR</th>
    </tr>

    <?php
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

$awalData = (5 * 1) - 4;
    
    $i = $awalData + 1;?>
    <!-- Perintah untuk menampilkan data -->
    <?php foreach ($identitas as $row ): ?>
    <tr>
        <td><?=$i;?></td>
        <td>
            <a href="identitas/ubah/<?=$row["id"];?>"><button type="button" class="btn btn-warning">Ubah</button></a>

            <a href="identitas/hapus/<?=$row["id"];?>" onclick="return confirm('yakin?');"><button type="button"
                    class="btn btn-danger">Hapus</button></a>

            <a href="identitas/detail/<?=$row["id"];?>"><button type="button"
                    class="btn btn-secondary">Detail</button></a>
        </td>

        <td><?=$row["nama"];?></td>
        <td><?=$row["alamat"];?></td>
        <td><?=$row["email"];?></td>
        <td><img src="imgpostgresql/<?php echo $row["gambar"]; ?>" width="70"></td>
    </tr>
    <?php $i++;?>
    <?php endforeach;?>
</table>

<!-- CREATE DATABASE (TAMBAH DATABASE) -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data
    Identitas Diri</button>
<br><br>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="color-text modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td><button type="button" class="btn btn-success">NAMA</button></td>
                            <td>: </td>
                            <td><input type="text" name="nama" id="nama" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-success">ALAMAT</button></td>
                            <td>: </td>
                            <td><input type="text" name="alamat" id="alamat" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-success">EMAIL</button></td>
                            <td>: </td>
                            <td><input type="text" name="email" id="email" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-success">GAMBAR</button></td>
                            <td>: </td>
                            <td><input type="file" name="gambar" id="gambar" autocomplete="off"></td>
                        </tr>

                    </table>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<?php
echo "Nama Database adalah " . $db->getDb();
echo 'Nama Table Database adalah ' . $db->getTable();

echo '<table style="width:30%" class="text center table1">';
echo '<tr>';
echo '<th>' . $db->getDb() . '</th>';
echo '</tr>';
echo '<tr>';
echo '<td>' . $db->getTable() . '</td>';
echo '</tr>';
echo '</table>';

// Show Footer
function javascript() {
    ?>
<script>
var base_url = "<?=URL;?>";
</script>
<script src="<?=URL;?>assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL;?>assets/js/datatable.js"></script>
<?php
}
require_once 'template/footer.php';
?>