<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body style="font-family: adinata">
	<center>
		<h2><p>PENDAFTARAN MAHASISWA</p></h2>
	<form action="proses.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			<tr>
				<tr>
				<td>nim</td>
				<td><input type="text" name="nim" required=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Male" required="">laki laki<br></td>
				<td><input type="radio" name="jk" value="Female">perempuan<br></td>
				<td><input type="radio" name="jk" value="Other">lain lain<br></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>
				<select name="studi" required="">
    				<option value="Manajemen Informatika">Manajemen Informatika</option>
    				<option value="Teknik Komputer">Teknik Komputer</option>
    				<option value="Perhotelan">Perhotelan</option>
    				<option value="Sistem Multimedia">Sistem Multimedia</option>
    				<option value="Teknik Informatika">Teknik Informatika</option>
    				<option value="Teknik Komputer">Teknik Komputer</option>
    				<option value="Perhotelan">Perhotelan</option>
    				<option value="Teknik Informatika">Teknik Informatika</option>
    				</select>
    			</td>
    		</tr>
			<tr>

				<td>Fakultas</td>
				<td>
				<select name="fakultas" required="">
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FKB">Fakultas Komunikai dan Bisnis</option>
    				<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    			</select>
    			</td>
    		</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td>
					<input type="textarea" name="alamat">
				</td>
			</tr>
			<tr>
				<td>moto hidup</td>
				<td>:</td>
				<td>
					<input type="textarea" name="moto hidup">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send" style="color: black; width: 100px;height: 40px;border-radius: 10px"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>


	