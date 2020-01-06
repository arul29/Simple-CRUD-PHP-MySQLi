<a href="index.php">Show Data</a>
<br><br>

<?php
include 'config.php';
$a=mysqli_query($conn,"SELECT * FROM college_student WHERE student_id='$_GET[student_id]'");
$b=mysqli_fetch_array($a,MYSQLI_ASSOC)
?>
<form method="post">
	Student ID : <input type="text" name="student_id" placeholder="Insert Student ID" value="<?= $b['student_id'] ?>"><br><br>
	Name : <input type="text" name="name" placeholder="Insert Name" value="<?= $b['name']; ?>"><br><br>
	Majors : <input type="text" name="majors" placeholder="Insert Majors" value="<?= $b['majors']; ?>"><br><br>
	Gender : 
  <select name="gender">
    <option value="Male" <?php if($b['gender'] == "Male") echo "selected"; ?>>Male</option>
    <option value="Female" <?php if($b['gender'] == "Female") echo "selected" ; ?>>Female</option>
  </select><br><br>
	Address : <input type="text" name="address" placeholder="Insert Address" value="<?= $b['address']; ?>"><br><br>
	<input type="submit" name="update" value="Update">
	<input type="reset" name="cancel" value="Cancel">
</form>
<?php
if(isset($_POST['update']))
{
  include 'config.php';
  $student_id=$_POST['student_id'];
  $name=$_POST['name'];
  $majors=$_POST['majors'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];

  $sql="UPDATE college_student SET student_id='$student_id',name='$name',majors='$majors',gender='$gender',address='$address' WHERE student_id='$_GET[student_id]'";
  if($conn->query($sql) === false)
  { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
  }  
  else 
  { // Jika berhasil alihkan ke halaman tampil.php
    echo "<script>alert('Update Success!')</script>";
  	echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
}

?>   