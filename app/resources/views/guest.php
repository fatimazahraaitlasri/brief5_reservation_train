<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylelogin.css">

    <link rel="stylesheet" href="css/components/Navigation.css">

    <title>Document</title>
</head>

<body>
    <?php component("Navigation"); ?>
    <?php if (isset($error)) : ?>
        <p><?= $error ?></p>
    <?php endif; ?>
   
        <!-- <form method="post" >
            <div>
                <label for="">Name</label>
                <input type="text" name="nom">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="">Phone</label>
                <input type="text" name="tel">
            </div>
            <button type="submit" value="submit">ok</button>
        </form> -->
    


        <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h1>Inscris Vous  !!!</h1>
                <form action="" method="POST" class="test">
                    <div class="form-group">
                        <label for="staticEmail" class=" col-form-label">username</label><br>
                        <input type="text" class="form-control form-control-lg" id="staticEmail"  name="nom">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class=" col-form-label">Email</label>
                        <input type="text" class="form-control form-control-lg" id="inputPassword" name="email">
                    </div>
                    <div class="">
                        <label for="inputPassword" class=" col-form-label">phone</label>
                        <input type="text" class="form-control form-control-lg" id="inputPassword" name="tel">
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary  btn-block mx-5 mt-4">inscrire</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>