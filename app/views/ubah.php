<?php
echo uri(3);
if (!empty($_POST)) {

    if (!empty($_POST['nama'])) {
        // cek apakah data berhasil diubah atau tidak
        if ($db->updateIdentitas($_POST) > 0) {
            echo "
        <script>
        alert('Database Berhasil Diubah!');
        document.location.href = 'identitas';
        </script>
        ";
        } else {
            echo "
        <script>
        alert('Database Gagal Diubah!');
        document.location.href = 'identitas';
        </script>
        ";
        }
    }
}

?>
<style>
body {
    background-color: darkgray;
}

.center {
    margin-left: auto;
    margin-right: auto;
}
</style>


<table border="3" class="center">
    <tr>
        <td><button type="button" class="text-light bg-dark">
                <h1>DETAIL DATA IDENTITAS DIRI</h1>
            </button>
        </td>
    </tr>
</table>
<br></br>
<form action="" method="post" enctype="multipart/form-data">
    <table border="6" class="center">
        <tr>
            <td><label for="nama"><button type="button" class="text-light bg-dark">
                        <h2>NAMA</h2>
                    </button></label></td>
            <td>
                <h2> : </h2>
            </td>
            <td>
                <h2><input type="text" name="nama" id="nama" autocomplete="off" required
                        value="<?=$identitas["nama"];?>">
                </h2>
            </td>
        </tr>

        <tr>
            <td><label for="alamat"><button type="button" class="text-light bg-dark">
                        <h2>ALAMAT</h2>
                    </button></label></td>
            <td>
                <h2> : </h2>
            </td>
            <td>
                <h2><input type="text" name="alamat" id="alamat" autocomplete="off" required
                        value="<?=$identitas["alamat"];?>">
                    <h2>
            </td>
        </tr>

        <tr>
            <td><label for="email"><button type="button" class="text-light bg-dark">
                        <h2>EMAIL</h2>
                    </button></label></td>
            <td>
                <h2> : </h2>
            </td>
            <td>
                <h2><input type="text" name="email" id="email" autocomplete="off" required
                        value="<?=$identitas["email"];?>"></h2>
            </td>
        </tr>

        <tr>
            <td><label for="gambar"><button type="button" class="text-light bg-dark">
                        <h2>GAMBAR</h2>
                    </button></label></td>
            <td>
                <h2> : </h2>
            <td><img src="imgpostgresql/<?=$identitas['gambar'];?>" width="80"> <br></br>
                <input type="file" name="gambar" id="gambar" autocomplete="off" value="<?=$identitas["gambar"];?>">
            </td>
        </tr>
    </table>
    <table border="4" class="center">
        <br></br>
        <br></br>
        <tr>
            <td colspan="3"><button type="submit" name="submit" class="btn btn-warning">
                    <h2>UBAH DATA!<h2>
                </button></td>
        </tr>
    </table>
</form>
<?php
require_once 'template/footer.php';