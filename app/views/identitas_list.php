<?php
if(!empty($alert)){
    echo '<script language="javascript">';
        echo "alert('Database Berhasil Ditambahkan!')";
        "document.location.href = 'identitas_list.php" . base_url() . "'identitas/insert'";
        echo '</script>';
    }else{
    echo '<script language="javascript">';
        echo "alert('Database Berhasil Diubah!')";
        "document.location.href = 'ubah.php'" . base_url() . "'identitas/update'";
        echo '</script>'; 
    }
function css()
{
?>

<style>
body {
    background-color: black;
    color: white;
}
</style>

<?php
}
require_once 'template/header.php';
?>

<h1 class="text-center text-light bg-dark">DAFTAR IDENTITAS DIRI</h1>

<br></br>

<div class="d-flex justify-content-center">
    <nav aria-label="Page navigation example">
        <?php echo ($paginator); ?>
    </nav>
</div>

<br></br>

<table class="table table-dark table-striped table-hover">

    <tr>
        <th>N0.</th>
        <th>AKSI</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>EMAIL</th>
        <th>GAMBAR</th>
    </tr>

    <!-- Perintah untuk menampilkan data -->
    <?php
    $i = !empty($page) ? ($page - 1) * $limit + 1 : 1;
    foreach ($identitas as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="<?= base_url() . 'identitas/ubah/' . $row["id"]; ?>"><button type="button"
                    class="btn btn-warning">Ubah</button></a>

            <a href="<?= base_url() . 'identitas/hapus/' . $row["id"]; ?>" onclick="return confirm('yakin?');"><button
                    type="button" class="btn btn-danger">Hapus</button></a>

            <a href="<?= base_url() . 'identitas/detail/' . $row["id"]; ?>"><button type="button"
                    class="btn btn-secondary">Detail</button></a>
        </td>

        <td><?= $row["nama"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><img src="<?php echo base_url(). 'images/'. $row["gambar"]; ?>" width="70"></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
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

                <form action="<?=base_url(). 'identitas/insert';?>" method="post" enctype="multipart/form-data">
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
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

echo 'Nama Database adalah '. $db->getDb();
echo '<br>';
echo '</br>';
echo 'Nama Table Database adalah '. $db->getTable();
echo '<br>';
echo '</br>';

echo '<table style="width:30%" class="text center table1">';
echo '<tr>';
echo '<th>' . $db->getDb() . '</th>';
echo '</tr>';
echo '<tr>';
echo '<td>' . $db->getTable() . '</td>';
echo '</tr>';
echo '</table>';

function javascript()
{
?>

<?php
}
require_once 'template/footer.php';
?>