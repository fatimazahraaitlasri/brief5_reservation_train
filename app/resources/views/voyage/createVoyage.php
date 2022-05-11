<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/components/Navigation.css">
    <link rel="stylesheet" href="css/voyage.css">
    <title>Document</title>
</head>

<body>
 <?php component("Navigation");?>

    <center>
    <h1>La Création Des Voyages </h1> 
    </center>
    <form method="post" class="formAddVoyages">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date de début </label>
            <input type="datetime-local" name="dateDebut" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date Arrive</label>
            <input type="datetime-local" name="dateArrive" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3 ">
            <label class="-label" for="exampleCheck1">Ville depart</label>
            <input type="text" name="villeDepart" class="form-control" id="exampleCheck1" required>
        </div>
        <div class="mb-3 ">
            <label class="-label" for="exampleCheck1">Ville d'arrive</label>
            <input type="text" name="villeArrive" class="form-control" id="exampleCheck1" required>
        </div>
        <div class="mb-3 ">
            <label class="-label" for="exampleCheck1">Prix</label>
            <input type="text" name="prix" class="form-control" id="exampleCheck1" required>
        </div>
        <div class="mb-3 form-check">
        <label class="-label" for="exampleCheck1">Train</label>
            <select class="form-select" aria-label="Default select example" name="trainId" required>
                <option selected>select train</option>
                <?php foreach ($trains as $train) : ?>
                    <option value="<?= $train["id"] ?>"><?= $train["nom"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>