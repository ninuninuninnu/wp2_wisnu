<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <a href="<?= base_url('index.php/mahasiswa/insert'); ?>">Tambah Mahasiswa</a>
    <table width="40%" border="1">
        <thead>
            <tr>
                <td>No.</td>
                <td>NIM</td>
                <td>Nama</td>
                <td>Jurusan</td>
                <td>Alamat</td>
                <td>Action</td>
                <td>Action</td>
            </tr>
        </thead>
        <?php $no = 0;
        foreach ($mahasiswa as $row):
            $no++; ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>
                <td>
                    <?php echo $row->nim; ?>
                </td>
                <td>
                    <?php echo $row->nama; ?>
                </td>
                <td>
                    <?php echo $row->jurusan; ?>
                </td>
                <td>
                    <?php echo $row->alamat; ?>
                </td>
                <td>
                    <a href="<?= base_url('index.php/mahasiswa/hapus/' . $row->nim); ?>">Hapus</a>
                </td>
                <td>
                    <a href="<?= base_url('index.php/mahasiswa/edit/' . $row->nim); ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </Table>
</body>

</html>