<?php
include_once("koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM soal WHERE id='$id'");

?>
<script>
  alert('Success to delete!');
  window.location.href = 'index.php?page=soal';
</script>
<?php
?>