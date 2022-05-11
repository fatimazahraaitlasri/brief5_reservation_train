<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylelogin.css">
    <title>Document</title>
</head>

<body>
    <?php component("Navigation"); ?>
    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h1>this is login page</h1>
                <?php if(isset($error)): ?>
                    <p><?= $error?></p>
                    <?php endif;?>
                <form action="" method="POST" class="test">
                    <div class="form-group">
                        <label for="staticEmail" class=" col-form-label">username</label><br>
                        <input type="text" class="form-control form-control-lg" id="staticEmail" placeholder="username" name="username">
                    </div>
                    <div class="">
                        <label for="inputPassword" class=" col-form-label">Password</label>
                        <input type="password" class="form-control form-control-lg" id="inputPassword" name="password">
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-block mx-5 mt-4">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <form action="" method="post">
        <input type="text" placeholder="user name" name="username">
        <input type="password" placeholder="password" name="password">
        <button name="submit">submit</button>
    </form> -->

</body>



</html>