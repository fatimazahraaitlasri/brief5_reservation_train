<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/voyage.css">
    <link rel="stylesheet" href="css/components/Navigation.css">

    <title>voyages</title>
</head>

<body>

 <?php component("Navigation");?>
 
 <a href=" <?= createLink('/Voyage/create') ?>" class="card-link"> <img src="https://cdn-icons-png.flaticon.com/128/1828/1828817.png" alt="" class="add">   </a>

<center> <h1>list des voyages</h1></center>



    <table class="table w-75">
    <thead class="table-light ">
       <tr class=" rounded">
         <th scope="col"> Date  de début </th>
         <th scope="col"> Date  de départ </th>
         <th scope="col"> ville de départ </th>
         <th scope="col"> Ville d' arriver </th>
         <th scope="col"> Prix </th>
         <th scope="col"> train </th>
         <th scope="col"> Actions </th>
       </tr>
     </thead>



     <?php foreach($voyages as $vyg):?> 

  <tbody>
    <tr>
      
      <td><?= $vyg["dateDebut"]?> </td>
      <td><?= $vyg["dateArrive"]?></td>
      <td><?= $vyg["villeDepart"]?></td>
      <td><?= $vyg["villeArrive"]?></td>
      <td><?= $vyg["prix"]?></td>
      <td><?= $vyg["trainId"]?></td>
      <td>
      
      <a href=" <?= createLink('/Voyage/delete/'. $vyg['id']) ?>" class="card-link"> <img src="https://img.icons8.com/fluency/2x/filled-trash.png" alt="">   </a>
      </td>
    </tr>
   
  </tbody>
  <?php endforeach?>
</table>







</body>

</html>