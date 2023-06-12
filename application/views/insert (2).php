<html>

<body>
    <form action="<?= base_url('index.php/mahasiswa/insertData'); ?>" method="post">
        <table border="1%">
            <tr>
                <th colspan="3">
                    Input Mata Kuliah
                </th>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim" id="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" id="sks">
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Rekayasa Industri">Teknik Rekayasa Industri</option>
                        <option value="Akutansi">Akutansi</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Adminisrtasi Bisnis">Administrasi Bisnis</option>
                        <option value="Perhotelan">Perhotelan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit" id="submit" value="submit"></td>
            </tr>
        </table>
        <?php
        $this->load->library('form_validation'); 
        echo validation_errors(); ?>
    </form>
</body>

</html>