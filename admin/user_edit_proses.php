<?php 
include '_config.php';

$id_user = $_GET['id'];
$nama = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];

$update = mysqli_query($con, "UPDATE user SET nama_user='$nama', username='$username', password='$password' where id_user='$id_user'");

//Untuk ngecek kalo ke update
if($update){?>
    <script>
    alert('Data berhasil diubah!')
    location.href = 'page_user.php'
</script>
<?php }else{?>
    <script>
    alert('Data gagal diubah!')
    location.href = 'page_user.php'
</script>
}<?php
}
?>