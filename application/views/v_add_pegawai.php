<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>

<body>
    <center>
        <h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
        <h3>Tambah data baru</h3>
    </center>
    <form action="<?php echo base_url() . 'pegawai/tambah_aksi'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>jabatan</td>
                <td><input type="text" name="jabatan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>


    <center>
        <h2>Dedi Nugroho</h2>
    </center>
    
</body>

</html>

<!-- //Dedi Nugroho // 0895361435659 // Surakarta -->