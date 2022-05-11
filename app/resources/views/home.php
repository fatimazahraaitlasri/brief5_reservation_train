<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components/Navigation.css">


</head>
<header>

</header>

<body>



    <?php component("Navigation"); ?>
    <section class="containerForm">
        <!-- <h1>Je réserve mon billet de train au maroc</h1> -->
        <h1>Je réserve mon billet de train </h1>
        <form action="" class="formReservation  form-control" method="GET">
            <div>
                <div class="divForm1">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Ville de départ</label>
                    <input type="text" name="villeDepart" placeholder="Ville de départ">
                </div>

            </div>
            <div>
                <div class="divForm1">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Ville d'arrivée</label>
                    <input type="text" name="villeArrive" placeholder="Ville d'arrivée">
                </div>
            </div>


            <div>
                <div class="divForm1">
                    <label for="staticEmail" class="col-sm-2 col-form-label">date de départ</label>
                    <input type="date" name="dateDebut" placeholder="date de départ">
                    <!-- min="<?= date("Y-m-d\Th:i"); ?>" -->
                </div>

            </div>





            <div class="divForm1">

                <button type="submit" class="ant-btn">

                    <i aria-label="icon: search" class="anticon anticon-search">

                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="search" width="4em" height="3em" fill="currentColor" aria-hidden="true">

                            <path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 
                                    256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.
                                    2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.
                                    4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6
                                    -158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
                            </path>

                        </svg>
                    </i>


                </button>
            </div>

        </form>

    </section>









    </section>


    <?php if (isset($voyages)) : ?>
        <section class="containerVoyage">
            <!-- /////////////////////////// -->

            <table class="table">
                <thead>

                    <tr class="tr">
                        <th> name </th>
                        <th> date de départ </th>
                        <th> date d'arriver </th>
                        <th> prix </th>
                        <th> </th>
                    </tr>

                </thead>
                <?php
                foreach ($voyages as $voyage) : ?>
                    <tbody>
                        <tr>

                            <td><?= $voyage["nom"]         ?></td>
                            <td><?= $voyage["dateDebut"]   ?></td>
                            <td><?= $voyage["dateArrive"]  ?></td>
                            <td><?= $voyage["prix"]        ?></td>
                            <td><a href="<?= createLink("reservation/create/" . $voyage["voyageId"]) ?>"><button class="reservationButton">reservé</button></a></td>

                        </tr>

                    </tbody>
                <?php endforeach; ?>

            </table>
        </section>
    <?php endif; ?>




</body>

</html>