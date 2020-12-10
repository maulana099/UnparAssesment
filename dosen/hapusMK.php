<?php
include_once("koneksi.php");

$id = $_GET['id'];
// $nokta = $_GET['nokta'];
$result = mysqli_query($connect, "DELETE FROM hasil_konversi WHERE id='$id'");

?>
<script>
  alert('Success to delete!');
  window.location.href = 'index.php?page=nilaiMhs';
</script>
<?php
?>