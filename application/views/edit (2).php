<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa UBSI</title>
</head>
<body>
	<center>
		<h1>Edit Data Mahasiswa</h1>

	</center>
	<?php 
	
	foreach($mahasiswa as $row){ 
		
		?>
        <form action="<?php echo base_url(). 'index.php/mahasiswa/update'; ?>" method="post">
		<table style="margin:20px auto;">

        <tr>
				<td>NIM</td>
				<td><input type="text" name="nim" id="nim" readonly value="<?php echo $row->nim ?> "></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					
					<input type="text" name="nama" id="nama" value="<?php echo $row->nama ?>">
				</td>
			</tr>
            <tr>
				<td>Jurusan</td>
				<td>
					<select class="form-control" name="jurusan" id="jurusan">
						<option><?php echo $row->jurusan ?></option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Teknologi Informasi"> Teknologi Informasi</option>
						<option value="Sistem Informasi">Sistem Informasi</option>
						<option value="Teknik Rekayasa Elektro">Teknik Rekayasa Elektro</option> <option value="Ilmu Komputer">Ilmu Komputer</option>
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
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" id="alamat" value="<?php echo $row->alamat ?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" id="submit" value="Simpan" ></td>
			</tr>
		</table>
	</form>
	<?php } 
	$this->load->library('form_validation');
	echo validation_errors();
	?>
</body>
</html>