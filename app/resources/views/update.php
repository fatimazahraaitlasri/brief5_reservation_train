<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/update.css">
    <link rel="stylesheet" href="css/components/Navigation.css">



    <title>Document</title>
</head>
<body>
<?php component("Navigation"); ?>
    <center> <h1> Modifier Vous Reservation</h1></center>
    <form action="" method="POST">
        <label for=""> Nombre De Place </label>
        <input type="text" name="nbrPlace"value="<?= $data["nbrPlace"]?>">
        <label for=""> Confort</label>
        <input type="text" name="confort"value="<?= $data["confort"]?>">
        <label for="">date reservation </label>
        <input type="date" name="date"value="<?= $data["date"]?>">
        <input type="submit" value="modifier" class="modifier">
    </form>
</body>
</html>