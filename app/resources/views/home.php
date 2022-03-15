<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


</head>
<header>

</header>

<body>
    <!-- $data = [["nom" =>  "said"],["nom" =>  "fatimazahra"]] -->


    <section class="bg-light">
        <nav class="container d-flex justify-content-between ligne-items-center ">

            <h2>FastTrain</h2>

            <div class="container_items  m-3">
                <ul class="d-flex  ">
                    <li><a href=""></a>Home</li>
                    <li><a href=""></a>Reservation</li>
                    <li><a href=""></a>Mes Reservation</li>
                </ul>
            </div>

            <div>
                <button class="btn btn-primary">sign in </button>
                <button class="btn btn-secondary">sign up </button>
            </div>


        </nav>

    
        <!-- /////////////////////////// -->









        <!-- echo '<pre>', print_r($key["id"]), '</pre>'; -->
        }


    </section>
    <section class="containerForm">


        <form action="" class="formReservation  form-control" method="GET">

            <input type="text" name="garDepart" placeholder="gar de départ">
            <input type="text" name="garArrive" placeholder="gar d'arrivée">
            <input type="datetime-local" name="dateDebut" placeholder="date de départ">

            <button class="btn btn-secondary" name="submit">recherch </button>

        </form>
    </section>
    <div>
        <?php
        //  echo "ana id diali". $voyageExist["id"] ."bghit nmchi l".  $voyageExist["villeArrive"] ."men". $voyageExist["villeDepart"];
        ?>
    </div>

    </section>
    <section class="containerVoyahe">
        <!-- /////////////////////////// -->

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">date de départ</th>
                    <th scope="col">date d'arriver</th>
                    <th scope="col">prix</th>
                </tr>
            </thead>
            <?php
            foreach ($voyageExist as $key) : ?>
                <tbody>
                    <tr>
                        
                        <td><?= $key["nom"] ?></td>
                        <td><?= $key["dateDebut"] ?></td>
                        <td><?= $key["dateArrive"] ?></td>
                        <td><?= $key["prix"] ?></td>
                    </tr>

                </tbody>'
            <?php endforeach; ?>

        </table>

</body>

</html>