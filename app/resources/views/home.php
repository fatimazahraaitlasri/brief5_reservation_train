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
    
    <div>
        <?php foreach ($data  as  $d) : ?>

            <ul>
                <li> <?= $d['id'] ?> </li>
            </ul>
        <?php endforeach; ?>



    </div>
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

    </section>
    <section class="containerForm">
        <form action="" class="formReservation  form-control" method="POST">

            <input type="text" name="villeD" placeholder="ville de départ">
            <input type="text" name="villeA" placeholder="ville d'arrivé">
            <input type="text" name="heurD" placeholder="heur de départ ">
            <input type="text" name="heurA" placeholder="heur de d'rrivé ">
            <button class="btn btn-secondary" name="submit">recherch </button>

        </form>
    </section>

</body>

</html>