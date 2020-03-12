<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

	<br/>
	<br/>
	<h2>CRUD DATA MAHASISWA </h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>
    <table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php'; //untuk menyisipkan script file php lain ke dlm file ini.
        $no = 1;
        $data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_assoc($data)){   //mengambil function assoc (indexing tapi by nama field, bukan angka) 
            ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
