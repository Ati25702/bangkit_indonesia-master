<?php 
include '_config.php';

$id_user = $_GET['id'];

$deleteSQL = mysqli_query($con, "DELETE FROM user where id_user='$id_user'");

//Untuk ngecek kalo ke update
if($deleteSQL){?>
    <script>
    alert('Data berhasil dihapus!')
    location.href = 'page_user.php'
</script>
<?php }else{?>
    <script>
    alert('Data gagal dihapus!')
    location.href = 'page_user.php'
</script>
}<?php
}
?>