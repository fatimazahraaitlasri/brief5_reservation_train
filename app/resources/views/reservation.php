<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/staylereservation.css">
    <link rel="stylesheet" href="css/components/Navigation.css">


</head>

<body>
    <?php component("Navigation"); ?>

    <section class="containerForm mb-5">

        <form action="" class="formReservation  form-control" method="POST">
            <label for="inputPassword" class="col-sm-2 col-form-label">nom du train</label>
            <input type="text" placeholder="" value="<?= $train["nom"] ?>" readonly>
            <label for="inputPassword" class="col-sm-2 col-form-label">date de départ</label>
            <input type="datetime" placeholder="" value="<?= $voyage["dateDebut"] ?>" readonly>
            <label for="inputPassword" class="col-sm-2 col-form-label">date d'arrivée</label>
            <input type="text" placeholder="" value="<?= $voyage["dateArrive"] ?>" readonly>
            <label for="inputPassword" class="col-sm-2 col-form-label">prix</label>
            <input type="text" class="form-control-plaintext" placeholder="" value="<?= $voyage["prix"] ?>" readonly>
            <!-- required to create a reservation (data mahatjin liha bach n crée reservation) -->
            <label for="confort" class="col-sm-2 col-form-label">confort</label>
            <div class="mb-3 form-check">
                <select class="form-select" aria-label="Default select example" name="confort" id="confort">
                    <?php
                    $confort = ["1ére classe", "2 éme classe", "Lit classe"];
                    foreach ($confort as $class) : ?>
                        <option value="<?= $class ?>"><?= $class ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <label for="nbrPlace" class="form-label">Nombre de places</label>
            <input type="number" class="form-control" value="1" min="1" name="nbrPlace" id="nbrPlace">
            
            <!-- required to create a reservation -->




            <button class="btn btn-secondary" >Reserver </button>

        </form>
    </section>

    <script src="js/javascript.js"></script>
</body>

</html>