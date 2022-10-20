<?php 
include 'db.php';
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $adress=$_POST["adress"];
  $phone=$_POST["phone"];
  $sql="insert into personinfo(name,surname,adress,phone) values('$name','$surname','$adress','$phone')";
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
  <h2>Ekle Sayfası</h2>
  <form action="add.php" method="post">
 
    <div class="form-group">
      <label for="name">Ad: </label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="name">Soyad: </label>
      <input type="surname" class="form-control" id="name" placeholder="Enter Surname" name="surname">
    </div>
    <div class="form-group">
      <label for="adres">Adres:</label>
      <input type="adress" class="form-control" id="pwd" placeholder="Enter Adress" name="adress">
    </div>
    <div class="form-group">
      <label for="phone">Telefon:</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Ekle</button>
    

  </form>
</div>

</body>
</html>
