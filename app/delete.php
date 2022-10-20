<?php include 'db.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from personinfo where id=$id";
    $result=mysqli_query($con,$sql);
    if ($result) {
        header('location:index.php');
    
    }
    else{
        die(mysqli_error($con));
    }
}
 ?>