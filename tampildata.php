<a href="tambahdata.php">Tambah</a>
<br><br>
<table border="">
 <tbody>
    <tr>
       <th>Stb</th>
       <th>Nama</th>
       <th>Jurusan</th>
       <th>Jenis Kelamin</th>
       <th>Alamat</th>
       <th>Opsi</th>
    </tr>
    <?php
    include 'koneksi.php';
    $a=mysqli_query($conn,"SELECT * FROM mahasiswa");
    foreach ($a as $b)
    {
    ?>
    <tr>
       <td><?= $b['stb']; ?></td>
       <td><?= $b['nama']; ?></td>
       <td><?= $b['jurusan']; ?></td>
       <td><?= $b['jk']; ?></td>
       <td><?= $b['alamat']; ?></td>
       <td>
            <a href="editdata.php?stb=<?= $b['stb']; ?>"><b><i>edit</i></b></a>
            <a href="tampildata.php?stb=<?= $b['stb']; ?>" onclick="return confirm('Yakin ingin menghapus?')"><b><i>hapus</i></b></a>
        </td>
    </tr>  
    <?php } ?>                          
 </tbody>
</table>


<?php
//include 'koneksi.php';
if(isset($_GET['stb']))
{
    $stb=$_GET['stb'];
    $sql="DELETE FROM mahasiswa WHERE stb='$stb'";
    if($conn->query($sql) === false)
    { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
      trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    } 
    else 
    { // Jika berhasil alihkan ke halaman tampil.php
      echo "<script>alert('Berhasil Menghapus!')</script>";
      echo "<meta http-equiv=refresh content=\"0; url=tampildata.php\">";
    }
}

?>