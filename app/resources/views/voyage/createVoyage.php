<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <h1>create voyage</h1>
    <form method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">date de début </label>
            <input type="date" name="dateDebut" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">date Arrive</label>
            <input type="date" name="dateArrive" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 ">
            <label class="-label" for="exampleCheck1">ville depart</label>
            <input type="text" name="villeDepart" class="form-control" id="exampleCheck1">
        </div>
        <div class="mb-3 ">
            <label class="-label" for="exampleCheck1">ville d'arrive</label>
            <input type="text" name="villeArrive" class="form-control" id="exampleCheck1">
        </div>
        <div class="mb-3 ">
            <label class="-label" for="exampleCheck1">prix</label>
            <input type="text" name="prix" class="form-control" id="exampleCheck1">
        </div>
        <div class="mb-3 form-check">
            <select class="form-select" aria-label="Default select example" name="trainId">
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