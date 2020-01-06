<a href="add.php">Add</a>
<br><br>
<table border="">
 <tbody>
    <tr>
       <th>Student ID</th>
       <th>Name</th>
       <th>Majors</th>
       <th>Gender</th>
       <th>Address</th>
       <th>Action</th>
    </tr>
    <?php
    include 'config.php';
    $a=mysqli_query($conn,"SELECT * FROM college_student");
    foreach ($a as $b)
    {
    ?>
    <tr>
       <td><?= $b['student_id']; ?></td>
       <td><?= $b['name']; ?></td>
       <td><?= $b['majors']; ?></td>
       <td><?= $b['gender']; ?></td>
       <td><?= $b['address']; ?></td>
       <td>
            <a href="update.php?student_id=<?= $b['student_id']; ?>"><b><i>Edit</i></b></a> | 
            <a href="index.php?student_id=<?= $b['student_id']; ?>" onclick="return confirm('Are you sure?')"><b><i>Delete</i></b></a>
        </td>
    </tr>  
    <?php } ?>                          
 </tbody>
</table>


<?php
//include 'koneksi.php';
if(isset($_GET['student_id']))
{
    $student_id=$_GET['student_id'];
    $sql="DELETE FROM college_student WHERE student_id='$student_id'";
    if($conn->query($sql) === false)
    { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
      trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    } 
    else 
    { // Jika berhasil alihkan ke halaman tampil.php
      echo "<script>alert('Delete Success!')</script>";
      echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
    }
}

?>