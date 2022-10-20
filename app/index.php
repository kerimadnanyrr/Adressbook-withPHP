<?php 
include 'db.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Emin misiniz?');
}
</script>
</head>

<body>

    <div class="container" style="margin-top:10px; width:100%;background-color:#d0f2c6">
        <div class="row">
          <div class="col-md-5">
          <img src="../img/download.jpg" class="rounded" alt="Cinque Terre" width="60px" height="80px"  >
          </div>
            <div class="col-md-7" style="margin-top:20px;  font-weight:bold;
    font-size: large;" >
                KİŞİLER
            </div>
        </div>
        <div class="row" style="justify-content:right;padding:5px">
        <a href="add.php"> <button type="button" class="btn btn-primary">Ekle</button></a> 
        </div>
        
        <table class="table">
  <thead>
    <tr>
      <th scope="col">İd</th>
      <th scope="col">İsim</th>
      <th scope="col">Soyisim</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adres</th>
    </tr>
  </thead>
  <tbody>
 
  <?php 
$sql="Select * from personinfo";
$result=mysqli_query($con,$sql);
if ($result) {
  while($row=mysqli_fetch_assoc($result)){
    $id=$row["id"];
    $name=$row["name"];
    $surname=$row["surname"];
    $phone=$row["phone"];
    $adress=$row["adress"];
echo '<tr>
<th scope="col">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$surname.'</td>
<td>'.$adress.'</td>
<td>'.$phone.'</td>
<td>
<button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" >Düzenle</a></button>
<button class="btn btn-danger"  ><a href="delete.php?deleteid='.$id.'" class="text-light"onclick="return checkDelete()">Sil</a></button>
</td>



</tr>';
  }
}

?>
    
   
    
  </tbody>
</table>
        </div>
        


    </div>
    




</body>

</html>