<?php 
include 'db.php';
$id=$_GET['updateid'];  
$sql="Select *from personinfo where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$surname=$row['surname'];
$adress=$row['adress'];
$phone=$row['phone'];



if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $adress=$_POST["adress"];
  $phone=$_POST["phone"];
  $sql="update personinfo set id=$id,name='$name',surname='$surname',adress='$adress',phone='$phone' where id=$id";
  $result=mysqli_query($con,$sql);
  if ($result) {
   header('location:index.php');
  }
  else{
    echo "eklenmedi";
  }
  
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

   


<div class="container" style="background-color:#d0f2c6">
  <h2>Düzenle Sayfası</h2>
  <form method="post">
  <div class="form-group">
      <label for="Id">Id:</label>
      <input type="Id" class="form-control" id="name"  name="Id">
    </div>
    <div class="form-group">
      <label for="name">Ad: </label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" value=<?php echo $name; ?>>
    </div>
    <div class="form-group">
      <label for="name">Soyad: </label>
      <input type="surname" class="form-control" id="name" placeholder="Enter Name" name="surname" value=<?php echo $surname; ?>>
    </div>
    <div class="form-group">
      <label for="adres">Adres:</label>
      <input type="adress" class="form-control" id="pwd" placeholder="Enter adres" name="adress" value=<?php echo $adress; ?>>
    </div>
    <div class="form-group">
      <label for="phone">Telefon:</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone" value=<?php echo $phone; ?>>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Düzenle</button>
    

  </form>
</div>

</body>
</html>
