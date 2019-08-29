  <a href="tampildata.php">Lihat data</a>
<br><br>
<form method="get">
	Stb : <input type="text" name="stb" placeholder="masukkan stb"><br><br>
	Nama : <input type="text" name="nama" placeholder="masukkan nama"><br><br>
	Jurusan : <input type="text" name="jur" placeholder="masukkan nama"><br><br>
	Jenis Kelamin : <input type="text" name="jk" placeholder="masukkan nama"><br><br>
	Alamat : <input type="text" name="almt" placeholder="masukkan nama"><br><br>
	<input type="submit" name="simpan" value="Simpan">
	<input type="reset" name="batal" value="Batal">
</form>
<?php
if(isset($_POST['simpan']))
{
include 'koneksi.php';
  $stb=$_POST['stb'];
  $nama=$_POST['nama'];
  $jur=$_POST['jur'];
  $jk=$_POST['jk'];
  $almt=$_POST['almt'];
 
  $sql="INSERT INTO mahasiswa (stb,nama,jurusan,jk,alamat) VALUES ('$stb','$nama','$jur','$jk','almt')";
  if($conn->query($sql) === false)
  { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
  }  
  else 
  { // Jika berhasil alihkan ke halaman tampil.php
    echo "<script>alert('Berhasil Menyimpan!')</script>";
  	echo "<meta http-equiv=refresh content=\"0; url=tampildata.php\">";
  }
}

?>   