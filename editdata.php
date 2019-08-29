<a href="tampildata.php">Lihat data</a>
<br><br>

<?php
include 'koneksi.php';
$a=mysqli_query($conn,"SELECT * FROM mahasiswa WHERE stb='$_GET[stb]'");
$b=mysqli_fetch_array($a,MYSQLI_ASSOC)
?>
<form method="post">
	Stb : <input type="text" name="stb" placeholder="masukkan stb" value="<?= $b['stb']; ?>"><br><br>
	Nama : <input type="text" name="nama" placeholder="masukkan nama" value="<?= $b['nama']; ?>"><br><br>
	Jurusan : <input type="text" name="jur" placeholder="masukkan nama" value="<?= $b['jurusan']; ?>"><br><br>
	Jenis Kelamin : <input type="text" name="jk" placeholder="masukkan nama" value="<?= $b['jk']; ?>""><br><br>
	Alamat : <input type="text" name="almt" placeholder="masukkan nama" value="<?= $b['alamat']; ?>"><br><br>
	<input type="submit" name="ubah" value="Ubah">
	<input type="reset" name="batal" value="Batal">
</form>
<?php
if(isset($_POST['ubah']))
{
include 'koneksi.php';
  $stb=$_POST['stb'];
  $nama=$_POST['nama'];
  $jur=$_POST['jur'];
  $jk=$_POST['jk'];
  $almt=$_POST['almt'];

  $sql="UPDATE mahasiswa SET stb='$stb',nama='$nama',jurusan='$jur',jk='$jk',alamat='$almt'";
  if($conn->query($sql) === false)
  { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
  }  
  else 
  { // Jika berhasil alihkan ke halaman tampil.php
    echo "<script>alert('Berhasil Mengubah!')</script>";
  	echo "<meta http-equiv=refresh content=\"0; url=tampildata.php\">";
  }
}

?>   