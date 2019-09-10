<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>

<body>
    <center>
        <h1>Membuat CRUD dengan CodeIgniter </h1>
        <h3>Edit Data</h3>
    </center>
    <?php foreach ($edit as $u) { ?>
        <form action="<?php echo base_url() . 'pegawai/update'; ?>" method="post">
            <table style="margin:20px auto;">
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input type="text" name="nama" value="<?php echo $u->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
                </tr>
                <tr>
                    <td>jabatan</td>
                    <td><input type="text" name="jabatan" value="<?php echo $u->jabatan ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>


    <center>
        <h2>Dedi Nugroho</h2>
    </center>
    
</body>

</html>

<!-- //Dedi Nugroho // 0895361435659 // Surakarta -->