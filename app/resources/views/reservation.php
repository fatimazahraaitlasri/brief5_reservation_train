<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>hello from create</h1>
    <ul>
        <h1><?= $name ?></h1>
        <?php foreach ($list as $i) : ?>
            <li><?= $i  ?></li>
        <?php endforeach ?>

    </ul>
    <script src="js/javascript.js"></script>
</body>

</html>