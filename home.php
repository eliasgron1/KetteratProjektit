<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {  //Tarkistetaan että käyttäjän on kirjautunut sisään
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="home.js"></script>
    <style>
    .kettu table, .kettu tr, .kettu td {color:rgb(234, 234, 238); background-color: black; border:2px solid rgb(24, 139, 160); font-family:Alatsi; font-size:11.5px; font-size: 20px; } 
    .kettu th {color:rgb(236, 190, 214);border:3px solid rgb(161, 56, 72); font-family:Alatsi; font-size: 22px; }
    h3{font-size: 24px; }
    </style>


</head>
<body>
    <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>

     <a href="logout.php">Logout</a>

<div class="kettu">
  <h3> Automuseo, Pietarsaari </h3>
  <table> 
  <tr>
  <th> Lippu </th>
  <th> Kpl </th>
  <th> Yht € </th> 
  </tr>

  <tr>
  <td> Aikuinen, alennus, 10e </td>
  <td> 1 </td>
  <td> 10€ </td>
  </tr>

  <tr>
  <td> Aikuinen, normaali, 12e</td>
  <td> 2 </td>
  <td> 24€ </td>
 </tr>

 <tr>
  <td> Aikuinen, eläkeläinen, 8e </td>
  <td> 2</td>
  <td> 16€ </td>
 </tr>

 <tr>
  <td> Lapsi, 5e  </td>
  <td> 2 </td>
  <td> 10€ </td>
 </tr>

  </table>
  </div>

  <div class="kettu">
    <h3> Luontomuseo, Vaasa </h3>
    <table> 
    <tr>
    <th> Lippu </th>
    <th> Kpl </th>
    <th> Yht € </th> 
    </tr>

    <tr>
    <td> Aikuinen, alennus, 10e </td>
    <td> 0 </td>
    <td> 0€ </td>
    </tr>

    <tr>
    <td> Aikuinen, normaali, 12e</td>
    <td> 3 </td>
    <td> 36€ </td>
   </tr>

   <tr>
    <td> Aikuinen, eläkeläinen, 8e </td>
    <td> 3 </td>
    <td> 24€ </td>
   </tr>

   <tr>
    <td> Lapsi, 5e  </td>
    <td> 4 </td>
    <td> 20€ </td>
   </tr>

</table>
</div>

   <div class="kettu">
    <h3> Lasten museo, Vaasa </h3>
    <table> 
    <tr>
    <th> Lippu </th>
    <th> Kpl </th>
    <th> Yht € </th> 
    </tr>

    <tr>
    <td> Aikuinen, alennus, 10e </td>
    <td> 0 </td>
    <td> 0€ </td>
    </tr>

    <tr>
    <td> Aikuinen, normaali, 12e</td>
    <td> 3 </td>
    <td> 36€ </td>
   </tr>

   <tr>
    <td> Aikuinen, eläkeläinen, 8e </td>
    <td> 3 </td>
    <td> 24€ </td>
   </tr>

   <tr>
    <td> Lapsi, 5e  </td>
    <td> 6 </td>
    <td> 30€ </td>
   </tr>
    </table>
    </div>
     
</body>
</html>



<?php 
}
else{ header("Location: index.php"); //Mikäli käyttäjä ei ole logged in, ohjataan pois
exit();
}

?>