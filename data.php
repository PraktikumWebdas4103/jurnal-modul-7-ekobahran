<?php
	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$jeniskelamin=$_POST['jeniskelamin'];
		$programstudi=$_POST['programstudi'];
		$fakultas=$_POST['fakultas'];
		$asal=$_POST['asal'];
		$motohidup=count($motohidup);
		}

		$error=array();
		if(strlen($_POST['nama']) != 25){
			$error['nama']=="Harus 25";
		} if(strlen($_POST['nim']) <= 10){
			$error['nim']=="Harus 10";
		}if(empty($jeniskelamin)){
			$error['jeniskelamin']=="Jenis Kelamin harus diisi";
		}if(empty($programstudi)){
			$error['programstudi']=="Program Studi harus diisi";
		}if(empty($fakultas)){
			$error['fakultas']=="fakultas harus diisi";
		}if(empty($asal)){
			$error['asal']=="asal harus diisi";
		}if(empty($motohidup)){
			$error['motohidup']=="motohidup harus diisi";
		}if(empty($err)){
			$sql = "INSERT INTO mahasiswa (nama, nim, jeniskelamin, programstudi, fakultas, asal, motohidup) VALUES ('nama','' nim',' jeniskelamin', 'programstudi','fakultas',' asal',' motohidup')";
			$query = mysqli_query($conn, $sql);
			if ($query) {
				echo "* Data Berhasil Disimpan";
					}else{
				echo "database gagal";;
		}
	}
?>
}
?>