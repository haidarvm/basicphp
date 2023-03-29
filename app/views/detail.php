<?php
require_once 'template/header.php';
?>
<style>

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
<table border="6" class="center">
    <tr>
        <td><label for="nama"><button type="button" class="text-light bg-dark">
                    <h2>NAMA</h2>
                </button></label></td>
        <td>
            <h2> : </h2>
        </td>
        <td>
            <h2><?=$identitas["nama"];?></h2>
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
            <h2><?=$identitas["alamat"];?></h2>
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
            <h2><?=$identitas["email"];?></h2>
        <td>
    </tr>

    <tr>
        <td><label for="gambar"><button type="button" class="text-light bg-dark">
                    <h2>GAMBAR</h2>
                </button></label></td>
        <td>
<<<<<<< HEAD
            <h2> : </h2>            
            <td><img src="<?= base_url(). 'images/'.$identitas['gambar']; ?>" width='200'> <br></br>

=======
            <h2> : </h2>
        <td><img src="<?= base_url(). 'images/'.$identitas['gambar']; ?>" width='200'> <br></br>
        </td>
>>>>>>> 4c7d21eebb694b78ce1edfd571be079413a4343d
    </tr>
</table>
<?php
require_once 'template/footer.php';