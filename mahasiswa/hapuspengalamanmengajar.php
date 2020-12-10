<?php
include "../koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=datapengalamanmengajar'</script>";
}
$query = "SELECT * FROM datapengalamanmengajar WHERE id='".$id."'";
          $sql = mysqli_query($connect, $query);
          $data = mysqli_fetch_array($sql); 

          unlink("bukti_berkas/".$data['bukti_berkas']);
$sql = "DELETE from datapengalamanmengajar where id='$id'";
mysqli_query($connect, $sql);
echo "<script>alert('Data telah dihapus');document.location='index.php?page=datapengalamanmengajar'</script>"
?>