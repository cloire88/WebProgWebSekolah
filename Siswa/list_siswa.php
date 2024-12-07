<?php include("../config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMA Garuda</title>
</head>

<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>
	
	<nav>
		<a href="form_pendaftaran.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Jurusan</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM calon_siswa";
		$query = mysqli_query($dbPPDB_SMA_Garuda, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['id']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jurusan']."</td>";
			
			echo "<td>";
			echo '<a href="form_edit_siswa.php?id=' . $siswa['id'] . '">Edit</a> ';
			echo '<a href="hapus_siswa.php?id=' . $siswa['id'] . '">Hapus</a>';
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>