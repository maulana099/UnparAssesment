<?php
include "../koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=mataKuliah'</script>";
}
$sql = "DELETE from matakuliah where id='$id'";
mysqli_query($connect, $sql);
echo "<script>alert('Data telah dihapus');document.location='index.php?page=mataKuliah'</script>"
?>