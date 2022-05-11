<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/voyage.css">
  <link rel="stylesheet" href="css/components/Navigation.css">

</head>

<body>
  <?php component("Navigation"); ?>

  <center>
    <h1>Mes Reservation</h1>
  </center>


  <table class="table w-75">
    <thead class="table-light ">
      <tr class=" rounded">
        <th scope="col"> nombre de place </th>
        <th scope="col"> ville depart </th>
        <th scope="col"> ville d'arrive </th>
        <th scope="col"> date de depart </th>

        <th scope="col"> confort </th>
        <th scope="col"> Modifier </th>
        <th scope="col"> suprimer </th>

      </tr>
    </thead>



    <?php foreach ($history as  $rsv) : ?>

      <tbody>
        <tr>

          <td><?= $rsv["nbrPlace"] ?></td>
          <td><?= $rsv["villeDepart"] ?></td>
          <td><?= $rsv["villeArrive"] ?></td>
          <td><?= $rsv["dateDebut"] ?></td>
          <td><?= $rsv["confort"] ?></td>

          <td><a href=" <?= createLink("/reservation/update/" . $rsv['id']) ?> "><img src="https://img.icons8.com/fluency/2x/4a90e2/approve-and-update.png" alt="" class="update"></a></td>
          <td><?php

              if ($rsv["dateDebut"] > date("Y-m-d H:i:s", strtotime("+1 hour"))) : ?><a href=" <?= createLink("/reservation/annuler/" . $rsv['reservationsId']) ?> "><img src="https://img.icons8.com/fluency/2x/filled-trash.png" alt="" class="delete"></a><?php endif ?></td>
        </tr>

      </tbody>
    <?php endforeach ?>
  </table>
</body>

</html>