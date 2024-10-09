<table border= "1">
    <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>Id Kategori</td>
    </tr>
    <?php
include "koneksi.php";

 // perintah
 $query = mysqli_query ($koneksi, "select * from aca ");


 // ambil datanya, datanya berbentuk Array
 while ($data = mysqli_fetch_array($query)){ ?>
    
   <tr>
   <td><?php echo $data["Id"] ?></td>
   <td><?php echo $data["Nama"] ?></td>
   <td><?php echo $data["Id Kategori"] ?></td>
   </tr>      
   
 <?php } ?>

 </table>